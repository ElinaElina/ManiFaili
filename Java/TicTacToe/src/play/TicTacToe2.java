package play;

import java.util.Random;

import javax.swing.JOptionPane;

public class TicTacToe2 {
	public static char[][] board = new char[3][3];
//	public static char[][] board = {
//			{' ', ' ', ' '},
//			{' ', ' ', ' '},
//			{' ', ' ', ' '},
//			
//		};
	    
		public static int counter = 1;
		public static String firstMove;
		public static boolean end = false;
		
		
		public static void main(String[] args) throws InterruptedException {
			for (int i = 0; i < 3; i++) 
			{
				for (int j = 0; j < 3; j++) 
				{
					board[i][j] = '_';
				}
			}
}
	
			
	String first = JOptionPane.showInputDialog("Kurš iet pirmais, Cilvēks raskti(H) ja dators raksti (C)")
			{
	if(first.equals("C")) 
	{
		System.out.println("Dators veic pirmo gājienu ar O");
		{
		//move();
		while(!end) 
	{
			for (int i = 0; i < 3; i++) 
			{
			   for (int j = 0; j < 3; j++) 
				{
				   System.out.print(board[i][j] + " ");
				}  
						System.out.println();
			}
	}
		}
			Thread.sleep(4000);  // milisekundes jeb 4 sekundes, pauzīte līdz ievada 
			
			// H input
			String move = JOptionPane.showInputDialog("Tavs gājiens H");
			if(move.equals("00") && board[0][0] == '-')
		    {
				board[0][0] = 'O';
			}
			else if(move.equals("01") && board[0][1] == '-')
			{
				board[0][1] = 'O';
			}
			else if(move.equals("02") && board[0][2] == '-')
			{
				board[0][2] = 'O';
			}
			else if(move.equals("10") && board[1][0] == '-')
			{
				board[1][0] = 'O';
			}
			else if(move.equals("11") && board[1][1] == '-')
			{
				board[1][1] = 'O';
			}
			else if(move.equals("12") && board[1][2] == '-')
			{
				board[1][2] = 'O';
			}
			else if(move.equals("20") && board[2][0] == '-')
			{
				board[2][0] = 'O';
			}
			else if(move.equals("21") && board[2][1] == '-')
			{
				board[2][1] = 'O';
			}
			else if(move.equals("22") && board[2][2] == '-')
			{
				board[2][2] = 'O';
			}
			else
			{
				System.out.println("SĪ kombinācija nav derīga");
			}
			
			//C input
			
			move();
	}
		
			}
	}
	else if (first.equals("H")) 
	{
	System.out.println("Cilvēks veic pirmo gājienu ar X");
	
	}
	else 
	{
			System.out.println("SĪ kombinācija nav derīga");
				
	}
} 
}

		
		public static void move()
		{
			
			
			Random rand = new Random();
			int f = rand.nextInt(4) + 1;
			
			
			if(counter == 1)
			
			{
				board[0][0] = 'X';
				firstMove = "00";
				
			}
			else if(f == 2) 
			{
				board[0][2] = 'X';
				firstMove = "02";
			}
			else if(f == 3)	
			{
				board[2][0] = 'X';
			    firstMove = "20";
		    }
		    else if(f == 4)	
		    {
		    	board[2][2] = 'X';
			    firstMove = "22";
		    }
		    else
		    {
	    	board[2][2] = 'X';
			    firstMove = "22";
		    }
			
			if(counter == 2);
			{
				if(board[1][1] == '-')
				{
					board[1][1] = 'X';
				}
				else
				{
					if(firstMove.equals("00"))
					{
						board[0][2] = 'X';
					}
					else if(firstMove.equals("02"))
					{
						board[2][2] = 'X';
					}
					else if (firstMove.equals("20"))
					{
						board[2][2] = 'X';
					}
					else if (firstMove.equals("22"))
					{
						board[0][2] = 'X';
					}
				}
				if(counter == 3);
				{
					int second[] = thirdMove();
					
					if(second[0] != 5)
					{
						board [second[0]][second[1]] = 'X';
					}
					else
					{
						int secondMy[] = thirdMyMove();
						if(secondMy[0] != 5)
						{
							board[secondMy[0]][secondMy[1]] = 'X';
						}
						else
						{
							secondMy = noOtherOption();
							board[secondMy[0]][secondMy[1]] = 'X';
						}
						
				}
				}
			}
			
			
		counter++;
}
		public static int[] thirdMove()
        
		{
			 int[] ret = new int [2];
			 ret[0] = 5;
			 
			 if(board[0][0] == 'O' && board[0][1]== 'O' && board[0][2] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 2;
			 }
			 if(board[0][0] == 'O' && board[1][0]== 'O' && board[2][0] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 0;
			 }
			 if(board[0][0] == 'O' && board[1][1]== 'O' && board[2][2] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 2;
			 }
			 if(board[0][1] == 'O' && board[0][2]== 'O' && board[0][0] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 0;
			 }
			 if(board[0][1] == 'O' && board[1][1]== 'O' && board[2][1] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 1;
			 }
			 if(board[0][2] == 'O' && board[1][1]== 'O' && board[2][0] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 0;
			 }
			 if(board[0][2] == 'O' && board[1][2]== 'O' && board[2][2] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 2;
			 }
			 if(board[1][0] == 'O' && board[1][1]== 'O' && board[1][2] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 2;
			 }
			 if(board[1][0] == 'O' && board[2][0]== 'O' && board[0][0] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 0;
			 }
			 if(board[2][0] == 'O' && board[1][1]== 'O' && board[0][2] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 2;
			 }
			 if(board[2][1] == 'O' && board[1][1]== 'O' && board[0][1] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 1;
			 }
			 if(board[2][2] == 'O' && board[1][1]== 'O' && board[0][0] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 0;
			 }
			 if(board[1][1] == 'O' && board[1][2]== 'O' && board[1][0] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 0;
			 }
			 if(board[2][2] == 'O' && board[1][2]== 'O' && board[0][2] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 2;
			 }
			 if(board[2][0] == 'O' && board[2][1]== 'O' && board[2][2] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 2;
			 }
			 if(board[2][1] == 'O' && board[2][2]== 'O' && board[2][0] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 0;
			 }
			 if(board[0][0] == 'O' && board[0][2]== 'O' && board[0][1] == '-')
			 {
				 ret[0] = 0;
				 ret[1] = 1;
			 }
			 if(board[0][2] == 'O' && board[2][2]== 'O' && board[1][2] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 2;
			 }
			 if(board[2][0] == 'O' && board[2][2]== 'O' && board[2][1] == '-')
			 {
				 ret[0] = 2;
				 ret[1] = 1;
			 }
			 if(board[0][0] == 'O' && board[2][2]== 'O' && board[1][1] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 1;
			 }
			 if(board[0][2] == 'O' && board[2][0]== 'O' && board[1][1] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 1;
			 }
			 if(board[0][1] == 'O' && board[2][1]== 'O' && board[1][1] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 1;
			 }
			 if(board[1][0] == 'O' && board[1][2]== 'O' && board[1][1] == '-')
			 {
				 ret[0] = 1;
				 ret[1] = 1;
			 }
			 return ret;
		}
			 public static int[] thirdMyMove()
			 {
				 int[] ret = new int [2];
				 ret[0] = 5;
				 if(board[0][0] == 'O' && board[0][1]== 'O' && board[0][2] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 2;
				 }
				 if(board[0][0] == 'O' && board[1][0]== 'O' && board[2][0] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 0;
				 }
				 if(board[0][0] == 'O' && board[1][1]== 'O' && board[2][2] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 2;
				 }
				 if(board[0][1] == 'O' && board[0][2]== 'O' && board[0][0] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 0;
				 }
				 if(board[0][1] == 'O' && board[1][1]== 'O' && board[2][1] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 1;
				 }
				 if(board[0][2] == 'O' && board[1][1]== 'O' && board[2][0] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 0;
				 }
				 if(board[0][2] == 'O' && board[1][2]== 'O' && board[2][2] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 2;
				 }
				 if(board[1][0] == 'O' && board[1][1]== 'O' && board[1][2] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 2;
				 }
				 if(board[1][0] == 'O' && board[2][0]== 'O' && board[0][0] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 0;
				 }
				 if(board[2][0] == 'O' && board[1][1]== 'O' && board[0][2] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 2;
				 }
				 if(board[2][1] == 'O' && board[1][1]== 'O' && board[0][1] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 1;
				 }
				 if(board[2][2] == 'O' && board[1][1]== 'O' && board[0][0] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 0;
				 }
				 if(board[1][1] == 'O' && board[1][2]== 'O' && board[1][0] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 0;
				 }
				 if(board[2][2] == 'O' && board[1][2]== 'O' && board[0][2] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 2;
				 }
				 if(board[2][0] == 'O' && board[2][1]== 'O' && board[2][2] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 2;
				 }
				 if(board[2][1] == 'O' && board[2][2]== 'O' && board[2][0] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 0;
				 }
				 if(board[0][0] == 'O' && board[0][2]== 'O' && board[0][1] == '-')
				 {
					 ret[0] = 0;
					 ret[1] = 1;
				 }
				 if(board[0][2] == 'O' && board[2][2]== 'O' && board[1][2] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 2;
				 }
				 if(board[2][0] == 'O' && board[2][2]== 'O' && board[2][1] == '-')
				 {
					 ret[0] = 2;
					 ret[1] = 1;
				 }
				 if(board[0][0] == 'O' && board[2][2]== 'O' && board[1][1] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 1;
				 }
				 if(board[0][2] == 'O' && board[2][0]== 'O' && board[1][1] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 1;
				 }
				 if(board[0][1] == 'O' && board[2][1]== 'O' && board[1][1] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 1;
				 }
				 if(board[1][0] == 'O' && board[1][2]== 'O' && board[1][1] == '-')
				 {
					 ret[0] = 1;
					 ret[1] = 1;
				 }
				 
				 return ret;
			 }
			 
			 public static int[] noOtherOption()
			 {   
				 int i1 = 0;
				 int[] ret = new int[2];
				 ret[0] = 5; // sis 5 , nekad netiks izmantots, kopesanas rezultats
				 for (int i = 0; i < 3; i++);
				 {
					 for(int j = 0; j < 3; j++)
					 {
						 if(board[i1][j] == '-')
							 
						 {  
							
							 ret[0] = i1;
							 ret[1] = j;
							 break;
						 }
					 }
					 if(ret[0] !=5)
					 {
						// break;
					 }
					 //system.out.println();
				 }
				 return ret;
			 }
		}


