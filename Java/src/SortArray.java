import java.util.Scanner;
public class SortArray {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		String[] strings = { "Ievadiet jebkuru skaitli no 20 lidz 40 : "};
		
		for(String s :strings ) { 
			
			System.out.println(s);
			int skaitlis = sc.nextInt();
			sc.close();
		}
		//for(int i= 19;i<20 && i < 41;i++) {
			//String s = strings[i];
			//System.out.println(s);
	
		// else (! i<20 && ! i > 40);
		
		
		int[]ints = {100};
		ints[0] = 10; 
		System.out.println("ints[0]:"+ ints[0]);
		for (int i1=10; i1 < 100; i1++) {      
			System.out.print(i1 + " , ");
 }
}
}
