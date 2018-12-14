import java.util.Scanner;
public class DateValidator {
	public static void main(String[] args) {
	Scanner sc = new Scanner(System.in);
	
	int year = 2001;
	int reminder = year % 4; // % dod atlikumu nevis konkretu dalijuma skaitli
	boolean isZero = reminder == 0;
	System.out.println("Is " + year + "leap year?" + ( year % 4 == 0));
	
	// izmantojot integer ipasibas, ir iespejams ari sadi
	
	int tmpRez = year/4;
	int  nextRez = tmpRez * 4;
	boolean eq = tmpRez == nextRez;
	System.out.println("tmpRez" + tmpRez + ", nextRez" + nextRez);
	
	
 }
}