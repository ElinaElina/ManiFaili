package play;

import java.util.Scanner;

public class Board {
	
	public static int row, col;
	public static Scanner scan = new Scanner(System.in);
	public static char[][] board = new char[3][3];
	public static char turn = 'X';

	public static void main(String[] args) {
		for (int i = 0; i < 3; i++) {
			for (int j = 0; j < 3; j++) {
				board[i][j] = '_';
			}
		}
		System.out.println();
		
		Play();
		
		
				
			}
		
	public static void Play() { // void method no return type
		boolean playing = true;
		PrintBoard();
		while (playing) {
			System.out.println("Uzraksti skaitlus 1;2;3 kombinaciju, starp skaitliem ieliec atstarpi");
			row = scan.nextInt() - 1; // jo sakums ir bus jaievada 1,2,3 bet datorval tas ir 0,1,2
			col = scan.nextInt() - 1;
			board[row][col] = turn; // jo char turn ir X

			if (GameOver (row, col)) {     // bija (row, col)
				playing = false;
				break;
				
			}
			System.out.println("Game over! Well done!");

			PrintBoard();
			
			if (turn == 'X')
				turn = 'O';
			else
				turn = 'X';
		}
		System.out.println();
	}
	
	public static void PrintBoard() {
		for (int i = 0; i < 3; i++) {
			System.out.println();
			for (int j = 0; j < 3; j++) {
				if (j == 0)
					System.out.print("|" + " ");
				System.out.print(board[i][j] + "|");

			}
		}
		
		System.out.println();
	}

	public static boolean GameOver (int rMove, int cMove)//(int rMove, int cMove) 
		// horizotāli
	{
		if (board[0][cMove] == board[1][cMove] && board[0][cMove] == board[2][cMove])// ja ieliek tris x, tad spele
																						// beidzas, kas atbilst 012
																						// masiva
			return true;
		if (board[0][rMove] == board[1][rMove] && board[0][rMove] == board[2][rMove])
			return true;
		// vertikali
		if (board[0][0] == board[1][1] && board[0][0] == board[2][2] && board[1][1] != '_')
			return true;
		if (board[0][2] == board[1][1] && board[0][2] == board[2][0] && board[1][1] != '_')
			return true;
		return false;

	}
	
		
}