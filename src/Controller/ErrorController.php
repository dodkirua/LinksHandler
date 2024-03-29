<?php


namespace Dodkirua\LinksHandler\Controller;


class ErrorController extends Controller{

     /**
     * page with error
     * @param int $error
     * @return array
     */
    public static function Error(int $error) : array{
        switch ($error){
            case -0:
                $var['error'] = "On ne modifie pas le compte admin";
                break;
            case -1 :
                $var['error'] = "Problème lors de l'ajout";
                break;
            case -2:
                $var['error'] = "le mot de passe et le mot de passe de vérification sont différent";
                break;
            case -3:
                $var['error'] = "Le mot de passe n'est pas assez fort";
                break;
            case -4:
                $var['error'] = "Le nom d'utilisateur existe déjà";
                break;
            case -5:
                $var['error'] = "Problème lors de la transmission des données au serveur";
                break;
            case -6:
                $var['error'] = "Mot de passe incorrect";
                break;
            case -7:
                $var['error'] = "Problème lors de la modification";
                break;
            case -8:
                $var['error'] = "Ancien mot de passe incorrect";
                break;
            case -9:
                $var['error'] = "Utilisateur inconnu";
                break;
            case -10:
                $var['error'] = "Problème lors de l'ajout'";
                break;
            case -11:
                $var['error'] = "Problème lors de l' upload du fichier";
                break;
            case -12:
                $var['error'] = "Mauvais type de fichier (jpg,jpeg,png)";
                break;
            case -13:
                $var['error'] = "Problème lors de la suppression";
                break;
            case -14 :
                $var['error'] = "Le mail est déjà utilisé";
                break;
            case -15 :
                $var['error'] = "Le nouveau mail et l'ancien mail sont identiques";
                break;
            case -16 :
                $var['error'] = "Le nouveau mot de passe et le pass de vérification ne sont pas identique";
                break;
            case -17 :
                $var['error'] = 'Le mot de passe est identique à l\'ancien';
                break;
            default :
                $var['error'] = "L'erreur $error est inconnu";
                exit;
        }
        return $var;
    }
}
