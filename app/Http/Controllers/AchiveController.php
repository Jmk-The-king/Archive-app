<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchiveController extends Controller
{
    //
    
    //
    public function loadAllArchives(){
        $all_archives = Archive::all();
        return view('archives',compact('all_archives'));
    }

    public function loadAddArchiveForm(){
        return view('archive-work');
    }

    public function AddArchive(Request $request){

        //validation du formulaire
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:Archives',
            'phone' => 'required',
            'password' => 'required|confirmed|min:4|max:8',
        ]);

        try {
            // enregistrement 
            $new_Archive = new Archive;
            $new_Archive->name = $request->nom;
            $new_Archive->email = $request->email;
            $new_Archive->phone_number = $request->phone;
            $new_Archive->password = Hash::make($request->password);
            $new_Archive->save();

            return redirect('/Archives')->with('success','Utilisateur ajouté avec succès!');
        } catch (Exception $e) {
            return redirect('/add/Archives')->with('fail',$e->getMessage());
        }
        
    }
    
    public function EditArchive(Request $request){
        //validation du formulaire
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        try {
            // Mise à jour 
            $update_Archive = Archive::where('id', $request->Archive_id)->update([
                'name' => $request->nom,
                'email' => $request->email,
                'phone_number' => $request->phone,
            ]);

            return redirect('/Archives')->with('success','Info de l\'utilisateur mis à jour avec succès!');
        } catch (Exception $e) {
            return redirect('/edit/Archives')->with('fail',$e->getMessage());
        }

    }

    public function loadEditForm($id){
        $Archive = Archive::find($id);

        return view('edit-Archive',compact('Archive'));
    }


    public function deleteArchive($id){
        try {
            Archive::where('id',$id)->delete();
            return redirect('/Archives')->with('success','utilisateur supprimé avec succès!');
        } catch (\Exception $e) {
            return redirect('/Archives')->with('fail',$e->getMessage());
        }
    }

}
