import java.util.Scanner;
public class Task2 {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Enter vards uzvards");
		String vu = sc.nextLine();
		
		String v ="Vards";
		System.out.println(v); 
		sc.nextLine();
		
		String u ="Uzvards";
		System.out.println(u); 
		sc.nextLine();
		
		System.out.println("V".toUpperCase()+ "ards".toLowerCase()+" "+u.toLowerCase());
		sc.nextLine();
		
		System.out.println(v.toLowerCase()+" "+u.toUpperCase());
		sc.nextLine();
		
		System.out.println("'Vards'");
		sc.nextLine();
		
		System.out.println("'Uzvards'");
		sc.nextLine();
		
		sc.close();
 }
	
}
