import java.util.Scanner;
public class day3Praktiskie {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.print("Enter value a:");
		int a = sc.nextInt();
		sc.close();
		
		if(a > 0) {
		System.out.print("" + a + "->"); 
		for (int i = 0; i <= a; i++) {  
			
			System.out.print("" + i + (i== a ? "!" : ","));
			
			
			}
	    }else {
	    	System.out.print("" + a + "->");
	    	for(int i= a; i<=0; i++) {
	    		System.out.print("" + i + (i != a ? "!" : ","));
	    	}
		}
	
	}	
}	

		

