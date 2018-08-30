package com.esgi.troc;

import java.util.ArrayList;

public class Ads {

    private int id_annonce;
    private int id_creator;
    private String titre;
    private String message;
    private String localisation;
    private String statut;
    private String url;

    /*
    URL url = new URL("http://image10.bizrate-images.com/resize?sq=60&uid=2216744464");
    Bitmap bmp = BitmapFactory.decodeStream(url.openConnection().getInputStream());
    imageView.setImageBitmap(bmp);
    */


    Ads(String url,int idAnnonce, String titre, String message, int idCreator)
    {
        this.url = url;
        this.id_annonce = idAnnonce;
        this.titre = titre;
        this.message=message;
        this.id_creator = idCreator;
    }
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
    public String getPhoto() { return this.url; }
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
