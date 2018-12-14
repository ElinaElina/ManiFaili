import java.util.Scanner;
public class day3Pr2 {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.print("Enter value b:");
		int b = sc.nextInt();
		sc.close();
		
		int from;    // ja nav pieskirta vertiba izmantot nevar// 
		//var rakstit ari sadi int from = b>0 ? 0 : b;
		// int to = b > 0 ? b : 0;
		int to;
		if(b>0) {
			from = 0;
			to = b;
		}else {
}
		from = b;
		to =0;
    System.out.print("" + b + "->" );
	for(int i= from; i<= to;i++) {
		System.out.print("" + i + (i== to ? "!" : ","));
	}
 }
}