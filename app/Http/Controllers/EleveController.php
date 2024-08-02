<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleves;

class EleveController extends Controller
{
    public function ajouterEleve(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'dateDeNaissance' => 'required',
            'etablissement' => 'required',
            'ine' => 'required',
            'niveau' => 'required',
        ]);

        $eleve = new Eleves();
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
        $eleve = Eleves::find($id);

        if (!$eleve) {
            return response()->json(['message' => 'Élève non trouvé.'], 404);
        }
        
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
       
        $eleve = Eleves::find($id);

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
        $eleve = Eleves::all();
        return response()->json($eleve);
    }

    public function listerId($id)
    {
        $eleve = Eleves::find($id);

        if ($eleve) {
            // Retourner le produit en format JSON
            return response()->json($eleve);
        } else {
            // Retourner une réponse JSON avec une erreur si le produit n'existe pas
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
