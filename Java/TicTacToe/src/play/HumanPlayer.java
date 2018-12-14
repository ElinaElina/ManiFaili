package play;
import java.util.ArrayList;
import java.util.Scanner;
public class HumanPlayer {
	
	public int [] makeMove () {
		
		 Scanner scan = new Scanner(System.in);
		 
		 Board1 game = new Board1 ();
		 
		 int[] check1 = new int[2];
			
		while (true) {

			System.out.println("Uzraksti skaitlus 1;2;3 kombinaciju, starp skaitliem ieliec atstarpi");
			int row = scan.nextInt() -1; // jo sakums ir bus jaievada 1,2,3 bet datorval tas ir 0,1,2
			int col = scan.nextInt() -1;

	  if ((row >= 0 && row <= 3) && (col >= 0 && col <= 3)) {
		
		  if (game.check(row, col)) {

				check1[0] = row;
				check1[1] = col; // jo char turn ir X
				return check1;
			
			}else {
				System.out.println("Nav brīvs");
				
			}
		} else {
		System.out.println("Error");

	}

	}
		
			
			
			
		}
}
