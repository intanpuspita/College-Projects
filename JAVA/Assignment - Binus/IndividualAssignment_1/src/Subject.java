/**
 * Author	  : Intan Puspitasari
 * Date  	  : 10 Januari 2019
 * Description: Object "MataKuliah" yang akan digunakan oleh class IndexPrestasiSemester
**/

public class Subject {
	public String code;
	public String name;
	public char grade;
	public int sks;
	
	public Subject() {}
	
	public void setCode(String kode) {
		this.code = kode;
	}
	
	public void setName(String nama) {
		this.name = nama;
	}
	
	public void setGrade(char grade) {
		this.grade = grade;
	}
	
	public void setSKS(int sks) {
		this.sks = sks;
	}
}
