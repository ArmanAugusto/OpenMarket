import java.util.Vector;

public class Item{
    protected String productName;
    protected String productId;
    protected String vendor;
    protected String category;
    protected Double price;
    protected String description;
    protected Double rating;
    protected Vector<String> reviews=new Vector<String>;
    
    //constructors
    Item(){
        productName = "";
        productId = "";
        vendor = "";
        category = "";
        price = 0;
        description = ""
        rating = 0;
    }
    public Item(String newProductName, String newProductId, String newVendor, String newCategory, Double newPrice, String newDescription, Double newRating){
        setproductName(newProductName);
        setproductId(newProductId);
        setvendor(newVendor);
        setcategory(newCategory);
        setprice(newPrice);
        setdescription(newDescription);
        setrating(newRating);
    }
    
    //get functions
    public String getproductName(){ return productName; }
    public String getproductId(){ return productId; }
    public String getvendor(){ return vendor; }
    public String getcategory(){ return category; }
    public Double getprice(){ return price; }
    public String getdescription(){ return description; }
    public Double getrating(){ return rating; }
    
    //set functions
    public String setproductName(String newProductName){ productName = newProductName; }
    public String setproductId(String newProductId){ productId = newProductId; }
    public String setvendor(String newVendor){ vendor = newVendor; }
    public String setcategory(String newCategory){ category = newCategory; }
    public Double setprice(Double newPrice){ price = newPrice; }
    public String setdescription(String newDescription){ description = newDescription; }
    public Double setrating(Double newRating){ rating = newRating; }
    
    //print functions
    public void printProductName() { System.out.print(productName); }
    public void printProductId() { System.out.print(productId); }
    public void printVendor() { System.out.print(vendor); }
    public void printCategory() { System.out.print(category); }
    public void printPrice() { System.out.print(price); }
    public void printDescription() { System.out.print(description); }
    public void printRating() { System.out.print(rating); }
    //print reviews
}