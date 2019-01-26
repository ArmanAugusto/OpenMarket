import java.util.Vector;

public class Customer{
    protected String firstName;
    protected String lastName;
    protected String email;
    protected String streetAddress;
    protected String city;
    protected String state;
    protected int zipCode;
    
    private String password;
    private Long creditCardNumber;
    private int cardValidation;
    
    protected Vector<Item> cart=new Vector<Item>;
    //Constructors
    Customer(){
    firstName = "";
    lastName = "";
    email = "";
    streetAddress = "";
    city = "";
    state = "";
    zipCode = 0;
    
    password = "";
    creditCardNumber = 0;
    cardValidation = 0; 
    }
    public Customer(String fName, String lName, String mail, String strAddress, String cty, String st, int zip, String pass, Long ccNum, int cardV){
        setfirstName(fName);
        setlastName(lName);
        setemail(mail);
        setstreetAddress(strAddress);
        setCity(cty);
        setState(st);
        setzipCode(zip);
        setPassword(pass);
        setCreditCardNum(ccNum);
        setCValidation(cardV);
    }
    
    //get functions
    public String getfirstName(){ return firstName; }
    public String getlastName(){ return lastName; }
    public String getemail(){ return email; }
    public String getstreetAddress(){ return streetAddress; }
    public String getCity(){ return city; }
    public String getState(){ return state; }
    public int getzipCode(){ return zipCode; }
    
    public String getPassword(){ return password; }
    public Long getcreditCardNum(){ return creditCardNumber; }
    public int getCValidation(){ return cardValidation; }
    
    //set functions
    public String setfirstName(String newfName){ firstName = newfName; }
    public String setlastName(String newlName){ lastName = newlName; }
    public String setemail(String newEmail){ email = newEmail; }
    public String setstreetAddress(String newAddr){ streetAddress = newAddr; }
    public String setCity(String newCity){ city = newCity; }
    public String setState(String newState){ state = newState; }
    public int setzipCode(int newZip){ zipCode = newZip; }
    
    public String setPassword(String newPass){ password = newPass; }
    public Long setCreditCardNum(Long newCCNum){ creditCardNumber = newCCNum; }
    public int setCValidation(int newCardV){ cardValidation = newCardV; }
    }
    
    //print functions
    public void printFirstName() { System.out.print(firstName); }
    public void printLastName() { System.out.print(lastName); }
    public void printEmail() { System.out.print(email); }
    public void printStreetAddress() { System.out.print(streetAddress); }
    public void printCity() { System.out.print(city); }
    public void printState() { System.out.print(state); }
    public void printZipCode() { System.out.print(zipCode); }
    
    //add to cart
    public void addToCart(Item addItem){
        cart.add(addItem);
    }
}