
class pegawaiTetap extends pegawai{
	private double gajipokok;
	
	public void setGaji(double vgaji){
		gajipokok = vgaji;
	}
	
	public double getGaji(){
		return gajipokok;
	}
	
	public void display(){
		System.out.println("NIP = "+nip);
		System.out.println("Nama = "+nama);
		System.out.println("Gaji = "+gajipokok);
	}
}

public class DemoInheritance {
	public static void main(String[] args){
		pegawaiTetap pgwTetap = new pegawaiTetap();
		pgwTetap.setNip("12345");
		pgwTetap.setNama("Intan");
		pgwTetap.setGaji(100000);
		pgwTetap.display();
	}
}
