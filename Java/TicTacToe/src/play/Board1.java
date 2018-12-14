package play;

import java.util.Scanner;

public class Board1 {
	private Scanner scan = new Scanner(System.in);

	private char[][] board = { { '_', '_', '_' }, { '_', '_', '_' }, { '_', '_', '_' },

	};

	public void printBoard() {

		for (int i = 0; i < 3; i++) {
			for (int j = 0; j < 3; j++) {

				System.out.print(board[i][j] + " ");
			}
			System.out.println();
		}
		
	}

	public void moveX() {

		while (true) {

			System.out.println("Uzraksti skaitlus 1;2;3 kombinaciju, starp skaitliem ieliec atstarpi");
			int row = scan.nextInt() -1; // jo sakums ir bus jaievada 1,2,3 bet datorval tas ir 0,1,2
			int col = scan.nextInt() -1;

	  if ((row >= 0 && row <= 3) && (col >= 0 && col <= 3)) {
		
		  if (check(row, col)) {
				board[row][col] = 'X'; // jo char turn ir X
				break;
				
			}else {
				System.out.println("Nav brīvs");
				
			}
		} else {
		System.out.println("Error");

	}

	}
 }

	public void moveO() {

		while (true) {
			System.out.println("Uzraksti skaitlus 1;2;3 kombinaciju, starp skaitliem ieliec atstarpi");

			int row = scan.nextInt() -1; // jo sakums ir bus jaievada 1,2,3 bet datorval tas ir 0,1,2
			int col = scan.nextInt() -1;

			if ((row >= 0 && row <= 3) && (col >= 0 && col <= 3)) {
				

				if (check(row, col)) {
					board[row][col] = 'O'; // jo char turn ir O
					break;
				}else {
					System.out.println("Nav brīvs");
				}

				
			} else {
				System.out.println("Error");
			}
		}
	}

	public boolean check(int row, int col) { // check available position

		if ('_' == board[row][col]) {
			return true;
		} else {
			return false;
		}
	}

}
