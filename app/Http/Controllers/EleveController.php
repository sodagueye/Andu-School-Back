<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eleves;

class EleveController extends Controller
{
    public function ajouterEleve(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'dateDeNaissance' => 'required',
        //     'etablissement' => 'required',
        //     'ine' => 'required',
        //     'niveau' => 'required',
        // ]);

        $eleve = new eleves();
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->dateDeNaissance = $request->dateDeNaissance;
        $eleve->etablissement = $request->etablissement;
        $eleve->ine = $request->ine;
        $eleve->niveau = $request->niveau;
        $eleve->save();

        return response()->json(['message' => 'L \eleve a ete ajoute avec succes'], 201);
    }
    // modifier l eleve
    public function modifier(Request $request, $id)
    {
        $eleve = eleves::find($id);

        if (!$eleve) {
            return response()->json(['message' => 'Élève non trouvé.'], 404);
        }
        // $eleve = eleves::findorfail($request->id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->dateDeNaissance = $request->dateDeNaissance;
        $eleve->etablissement = $request->etablissement;
        $eleve->ine = $request->ine;
        $eleve->niveau = $request->niveau;
        $eleve->save();

        return response()->json('vous avez modifier l eleve');
    }
    // supprimer l eleve
    public function supprimer($id)
    {
        // $eleve = eleves::findorfail($request->id)->delete();
        $eleve = eleves::find($id);

        if (!$eleve) {
            return response()->json(['message' => 'Élève non trouvé.'], 404);
        }
        // Suppression de l'élève
        $eleve->delete();
        return response()->json('vous avez supprimer le produit  le produit');
    }
    // lister les eleves
    public function lister()
    {
        $eleve = eleves::all();
        return response()->json($eleve);
    }
}
