
class matematika{
	public int bagi(int a, int b){
		return (a/b);
	}
	
	public double bagi(double a, double b){
		return (a/b);
	}
}

public class DemoOverloading2 {
	public static void main(String[] args){
		matematika mtk = new matematika();
		System.out.println("Hasil bagi int = "+ mtk.bagi(10, 3));
		System.out.println("Hasil bagi double = "+ mtk.bagi(10.0, 3.0));
	}
}
