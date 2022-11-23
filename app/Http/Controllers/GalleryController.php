<?php
namespace App\Http\Controllers;
use File;
use Alert;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index',  get_defined_vars());
    }

    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $newName = $name;
            $path =  $file->move(public_path('assets/img/gallery'),$newName);
            File::delete('assets/img/gallery/'.$request->hidden_image);
        }
        
        Gallery::create([            
            'img' => $name,                
            
        ]);    

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        unlink('assets/img/gallery/'.$gallery->img);
        Gallery::where('id', $gallery->id)->delete();
        return redirect()->route('gallery.index')->with([
            alert()->success('Sukses', 'Foto Gallery berhasil dihapus')
        ]);
    }
}
