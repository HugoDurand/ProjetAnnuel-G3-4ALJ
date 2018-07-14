package com.esgi.troc;

import java.util.ArrayList;

public class Ads {

    private int id_annonce;
    private int id_creator;
    private String titre;
    private String message;
    private String localisation;
    private String statut;

    Ads(int idAnnonce, String titre, int idCreator)
    {
        this.id_annonce = idAnnonce;
        this.titre = titre;
        this.id_creator = idCreator;
    }
    Ads(String message, String localisation, String statut)
    {
        this.message = message;
        this.localisation = localisation;
        this.statut = statut;
    }
    public void setIdAnnonce()
    {
        this.id_annonce = id_annonce;
    }
    public void setIdCreator()
    {
        this.id_creator = id_creator;
    }
    public void setTitre()
    {
        this.titre = titre;
    }
    public void setMessage()
    {
        this.message = message;
    }
    public void setLocalisation()
    {
        this.localisation = localisation;
    }
    public void setStatut()
    {
        this.statut = statut;
    }
    public int getIdAnnonce()
    {
        return this.id_annonce;
    }
    public int getIdCreator()
    {
        return this.id_creator;
    }
    public String getTitre()
    {
        return this.titre;
    }
    public String getMessage()
    {
        return this.message;
    }
    public String getLocalisation()
    {
        return this.localisation;
    }
    public String getStatut()
    {
        return this.statut;
    }

    /*public static ArrayList<Ads> getAds()
    {
        ArrayList<Ads> ads = new ArrayList<Ads>();
        ads.add(new Ads("","",""));
        return ads;
    }*/
}
