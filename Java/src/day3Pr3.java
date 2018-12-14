import java.util.Scanner;
public class day3Pr3 {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		System.out.print("Enter value a:");
		 int a = sc.nextInt();
		 
		 System.out.print("Enter value b:");
		 int b = sc.nextInt();
		 
		 sc.close();
		 
		 int from = a > b ? b : a;
		 int to = a > b ? a : b;
		 // sos var aizvietot int from = a;
		 // int from to = b;
		 
		     String result = "";// so nonemsim, ieliksim string  System.out.print("" + a + "->" );
			for(int i= from; i<= to;i++) {
				if(i%2 == 0 && i%3 == 0 && i%5 !=0) {// ar izsaukuma zimi, ka nedalas ar 5
					result = result + i + ",";                                 
				}
			}
			
			result = result.substring(0, result.length() -1);
			System.out.print("" + from + "," + to + "->" + result); 
			//System.out.println(i+ ", "); // nevar uztaisit bez komata, jo nezinam kurs ir pedejais skaitlis
			
 }
}