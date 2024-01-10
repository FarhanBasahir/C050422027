<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $registers = Register::with('register')
        ->when($request->input('nama_lengkap'), function ($query, $nama_lengkap) {
            return $query->where('nama_lengkap', 'like', '%' . $nama_lengkap . '%');
        })
        ->select('id','nama_lengkap','nama_panggilan','ttl','alamat_asal','alamat_banjarmasin','email','motivasi','pengalaman_organisasi','pengalaman_kepanitiaan','motto_hidup','divisi',)
        ->orderBy('id', 'asc')
        ->paginate(10);

        return view ('pages.register.index', compact('registers'));    
    }

    public function create()
    {
        return view('pages.register.create');
    }

    public function store(StoreRegisterRequest $request)
    {
        Register::create([
            'nama_lengkap' => $request['nama_lengkap'],
            'nama_panggilan'=> $request['nama_panggilan'],
            'ttl'=> $request['ttl'],
            'alamat_asal' => $request['alamat_asal'],
            'alamat_banjarmasin' => $request['alamat_banjarmasin'],
            'email' => $request['email'],
            'motivasi' => $request['motivasi'],
            'pengalaman_organisasi' => $request['pengalaman_organisasi'],
            'pengalaman_kepanitiaan' => $request['pengalaman_kepanitiaan'],
            'motto_hidup' => $request['motto_hidup'],
            'divisi' => $request['divisi'],
        ]);

        return redirect(route('register.index'))->with('success', 'Create New Register Successfully');
    }

    public function edit(Register $register)
    {
        return view('pages.register.edit')->with('register', $register);
    }

    public function show (string $register)
    {
        //
    }

    public function update(UpdateRegisterRequest $request, Register $register)
    {
        $validate = $request->validated();
        $register->update($validate);
        return redirect()->route('register.index')->with('success', 'Edit Register Successfully');
    }

    public function destroy(Register $register)
    {
        $register->delete();
        return redirect()->route('register.index')->with('success', 'Delete Register Successfully');
    }
}
