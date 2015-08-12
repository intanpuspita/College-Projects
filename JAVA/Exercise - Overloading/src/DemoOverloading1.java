
class mhsw {
	private String nim;
	private String nama;
	
	public void setMhsw(String vnama){
		nama=vnama;
	}
	
	public void setMhsw(String vnim, String vnama){
		nim=vnim;
		nama=vnama;
	}
	
	public void display(){
		System.out.println("NIM = "+nim);
		System.out.println("Nama = "+nama);
	}
}

public class DemoOverloading1{
	public static void main(String[] args){
		mhsw mahasiswa = new mhsw();
		mahasiswa.setMhsw("111511042","intan");
		mahasiswa.display();
	}
}