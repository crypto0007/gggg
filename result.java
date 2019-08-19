import java.util.*;

interface External
{
		abstract void getExtMarks();
		abstract void getTW();
}

interface Practical
{
	abstract void getPracMarks();
}

class SessinalExam
{
	Scanner s=new Scanner(System.in);
	int arr[][] =new int[5][3];
	//int arr1[][] =new int[5][3];
	//int arr2 [][] =new int[5][3];
	public void getMarks()
	{
		for(int i=0;i<5;i++)
		{
		    for(int j=0;j<3;j++)
		    {
				System.out.println("Enter marks for sessinal=");
				arr[i]=s.nextInt();
		        //System.out.println("Enter marks fo sessina2=");
				//arr1[i][j]=s.nextInt();
				//System.out.println("Enter marks fo sessina3=");
				//arr12[i][j]=s.nextInt();
		    }
		}
	}
	public void getTotal()
	{
		for()
		{

		}
	}
}

public class result extends SessinalExam implements External
{
	SessinalExam s=new SessinalExam();
	result r=new result();
	s.getExMarks();
	s.getTW();
	s.getPracMarks();
	r.getMarks();
	r.getTotal();

}

public void getMarks()
{

}

public void getTotal()
{

}

