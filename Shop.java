import java.util.Vector;

public class Shop{
    //items by category vectors
    protected Vector<Item> Electronics=new Vector<Item>;
    protected Vector<Item> VideoGames=new Vector<Item>;
    
    public void searchByCategory(String searchCategory){
        if (searchCategory == "Electronics"){
            //display vector of Electronics items
        }
        else if(searchCategory == "Video Games"){
            //display vector of Video Games items
        }
    }
    public void addToElectronics(Item addItem){
        Electronics.add(addItem);
    }
    public void addToVideoGames(Item addItem){
        VideoGames.add(addItem);
    }
}