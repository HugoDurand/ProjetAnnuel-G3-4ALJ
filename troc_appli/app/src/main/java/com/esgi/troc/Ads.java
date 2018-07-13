package com.esgi.troc;

public class Ads {

    private String message;
    private String localisation;
    private String price;
    private String statut;

    Ads(String message, String localisation, String price, String statut)
    {
        this.message = message;
        this.localisation = localisation;
        this.price = price;
        this.statut = statut;
    }

    public void setMessage()
    {
        this.message = message;
    }
    public void setLocalisation()
    {
        this.localisation = localisation;
    }
    public void setPrice()
    {
        this.price = price;
    }
    public void setStatut()
    {
        this.statut = statut;
    }
    public String getMessage()
    {
        return this.message;
    }
    public String getLocalisation()
    {
        return this.localisation;
    }
    public String getPrice()
    {
        return this.price;
    }
    public String getStatut()
    {
        return this.statut;
    }
}
