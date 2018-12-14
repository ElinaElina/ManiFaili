import java.util.Scanner;
public class Task1 {
	
		public static void main(String[] args) {
			Scanner scanner1 = new Scanner(System.in);
			
			System.out.println("Enter str1:");
			String str1 = scanner1.nextLine();
			
			System.out.println("Enter str2:");
			String str2 = scanner1.nextLine();
			
		    scanner1.close();
		    
		    if (str1.length()<str2.length()) {
		    	System.out.println(str1+str2+str1);	
		    }
		    else {
		    	System.out.println(str2+str1+str2);
		    	
		    }
			/*String str1 = "Hello";
			String str2 = "Hi";
			
			System.out.println("Enter Hello");
			String a = str2+str1+str2;
			int a1 = sc.nextInt();
			
			System.out.println("Enter Hi ");
		    String b = "str1"+str2+str1;
		    int b1 = sc.nextInt();
			
			if (a1 < b1){
				System.out.println("HiHelloHi");
			}
			else if(b1<a1) {
				System.out.println("HelloHi");
			}*/
		    
		}
}
