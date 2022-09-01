<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pelamar;
use App\Models\BerkasLamaran;

use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BerkasLamaranController extends Controller
{
    public function create($id)
    {
        $lamar = Pelamar::findOrFail($id);
        return view('berkaslamaran.create', compact('lamar'));
    }

    public function store(Request $request,$id)
    {
        $lamar = Pelamar::findOrFail($id);
        
        $this->validate($request, [
            'cv' => 'required|mimes:pdf|max:10000',
            'lamaran' => 'required|mimes:pdf|max:10000',
            'photo' => 'required|mimes:pdf|max:10000',
            'skck' => 'required|mimes:pdf|max:10000',
            'kk' => 'required|mimes:pdf|max:10000',
            'npwp' => 'nullable|mimes:pdf|max:10000',
            'paklaring' => 'nullable|mimes:pdf|max:10000',
            'sim' => 'nullable|mimes:pdf|max:10000',
            'sio' => 'nullable|mimes:pdf|max:10000',
            'sertipikat' => 'nullable|mimes:pdf|max:10000',
            'ijazah' => 'required|mimes:pdf|max:10000',
            'transkrip_nilai' => 'required|mimes:pdf|max:10000',    
        ]);
        if ($request->file('cv')) {
            $cv = $request->file('cv');
            $nama_dokumen = $lamar->nama_lengkap;
            $extcv = $request->file('cv')->getClientOriginalExtension();
            $CvName = $nama_dokumen.'_'.time().'.'.$extcv;
            $cv->storeAs('berkaspelamar/', $CvName);
        }
        if ($request->file('lamaran')) {
            $lamaran = $request->file('lamaran');
            $nama_dokumen = $lamar->nama_lengkap;
            $extlamaran= $request->file('lamaran')->getClientOriginalExtension();
            $lamaranName = $nama_dokumen.'_'.time().'.'.$extlamaran;
            $lamaran->storeAs('berkaspelamar/', $lamaranName);	
        }
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $nama_dokumen = $lamar->nama_lengkap;
            $extphoto = $request->file('photo')->getClientOriginalExtension();
            $photoName = $nama_dokumen.'_'.time().'.'.$extphoto;
            $photo->storeAs('berkaspelamar/', $photoName);	
        }
        if ($request->file('skck')) {
            $skck = $request->file('skck');
            $nama_dokumen = $lamar->nama_lengkap;
            $extskck = $request->file('skck')->getClientOriginalExtension();
            $skckName = $nama_dokumen.'_'.time().'.'.$extskck;
            $skck->storeAs('berkaspelamar/', $skckName);	
        }
        if ($request->file('kk')) {
            $kk = $request->file('kk');
            $nama_dokumen = $lamar->nama_lengkap;
            $extkk = $request->file('kk')->getClientOriginalExtension();
            $kkName = $nama_dokumen.'_'.time().'.'.$extkk;
            $kk->storeAs('berkaspelamar/', $kkName);	
        }
        if ($request->file('npwp')) {
            $npwp = $request->file('npwp');
            $nama_dokumen = $lamar->nama_lengkap;
            $extnpwp = $request->file('npwp')->getClientOriginalExtension();
            $npwpName = $nama_dokumen.'_'.time().'.'.$extnpwp;
            $npwp->storeAs('berkaspelamar/', $npwpName);	
        }
        if ($request->file('paklaring')) {
            $paklaring = $request->file('paklaring');
            $nama_dokumen = $lamar->nama_lengkap;
            $extpaklaring = $request->file('paklaring')->getClientOriginalExtension();
            $paklaringName = $nama_dokumen.'_'.time().'.'.$extpaklaring;
            $paklaring->storeAs('berkaspelamar/', $paklaringName);	
        }
        if ($request->file('sim')) {
            $sim = $request->file('sim');
            $nama_dokumen = $lamar->nama_lengkap;
            $extsim = $request->file('sim')->getClientOriginalExtension();
            $simName = $nama_dokumen.'_'.time().'.'.$extsim;
            $sim->storeAs('berkaspelamar/', $simName);	
        }
        if ($request->file('sio')) {
            $sio = $request->file('sio');
            $nama_dokumen = $lamar->nama_lengkap;
            $extsio = $request->file('sio')->getClientOriginalExtension();
            $sioName = $nama_dokumen.'_'.time().'.'.$extsio;
            $sio->storeAs('berkaspelamar/', $sioName);	
        }
        if ($request->file('sertipikat')) {
            $sertipikat = $request->file('sertipikat');
            $nama_dokumen = $lamar->nama_lengkap;
            $extsertipikat = $request->file('sertipikat')->getClientOriginalExtension();
            $sertipikatName = $nama_dokumen.'_'.time().'.'.$extsertipikat;
            $sertipikat->storeAs('berkaspelamar/', $sertipikatName);	
        }
        if ($request->file('ijazah')) {
            $ijazah = $request->file('ijazah');
            $nama_dokumen = $lamar->nama_lengkap;
            $extijazah = $request->file('ijazah')->getClientOriginalExtension();
            $ijazahName = $nama_dokumen.'_'.time().'.'.$extijazah;
            $ijazah->storeAs('berkaspelamar/', $ijazahName);	
        }
        if ($request->file('transkrip_nilai')) {
            $transkrip_nilai   = $request->file('transkrip_nilai');
            $nama_dokumen = $lamar->nama_lengkap;
            $exttranskrip_nilai = $request->file('transkrip_nilai')->getClientOriginalExtension();
            $transkrip_nilaiName = $nama_dokumen.'_'.time().'.'.$extcv;
            $transkrip_nilai->storeAs('berkaspelamar/', $transkrip_nilaiName);	
    }
    
	$ayeuna = new DateTime( date('Y-m-d H:i:s') );
        BerkasLamaran::create([
            'id_user' => $lamar->fk_user,
            'pelamar_id' => $lamar->id,
            'tanggal' => $ayeuna,
            'cv' => $CvName,
            'lamaran' => $CvName,
            'photo' => $CvName,
            'skck' => $CvName,
            'kk' => $CvName,
            'npwp' => $CvName,
            'paklaring' => $CvName,
            'sim' => $CvName,
            'sio' => $CvName,
            'sertipikat' => $CvName,
            'ijazah' => $CvName,
            'transkrip_nilai' => $CvName,
        ]);
        return redirect()->route('pelamar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
