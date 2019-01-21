/**
 * Author	  : Intan Puspitasari
 * Date  	  : 9 Januari 2019
 * Description: Program untuk kasus pada tugas individu 2
**/

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class IndexPrestasiSemester {
	
	// Global variable declaration
	static Scanner scan = new Scanner(System.in).useDelimiter("\\n");
	static List<Subject> subjectList = new ArrayList<Subject>();
	static final List<String> GRADE = new ArrayList<>(Arrays.asList("E","D","C","B","A"));
	
	// Description: main method
	public static void main(String[] args) {
		int selectedMenu = 0;
		
		do {
			selectedMenu = displayMenu();
			
			switch(selectedMenu) {
				case 1: 
					pendataanMataKuliah();
					break;
					
				case 2: 
					perhitunganIPS();
					break;
					
				case 3: 
					updateGrade();
					break;
					
				case 4: 
					System.out.println("\nProgram exits");
					break;
					
				default: 
					System.out.println("Menu yang anda pilih tidak tersedia.");
			}
			
		} while(selectedMenu != 4);
	}

	// Description: method to display main menu and read selected menu
	private static int displayMenu() {
		System.out.print("Pendataan dan Perhitungan Indeks Prestasi Semester\n"
				+ "1. Pendataan Mata Kuliah\n"
				+ "2. Perhitungan IPS\n"
				+ "3. Update Grade\n"
				+ "4. Keluar\n"
				+ "Masukkan pilihan anda = ");
		
		return scan.nextInt();
	}
	
	// Description: method to process menu 1, input subject data 
	private static void pendataanMataKuliah() {
		System.out.println("\n------ Pendataan Mata Kuliah ------");
		boolean isAdd = true;
		
		do {
			Subject mk = new Subject();
			
			System.out.print("\nMasukkan kode mata kuliah = ");
			mk.setCode(scan.next());
			
			System.out.print("Masukkan nama mata kuliah = ");
			mk.setName(scan.next());
			
			mk.setGrade(setStudentSubjectGrade("Masukkan grade mata kuliah"));
			
			System.out.print("Masukkan jumlah SKS = ");
			mk.setSKS(scan.nextInt());
			
			subjectList.add(mk);
			
			System.out.println();
			isAdd = checkIsProcessContinue();
			
		} while(isAdd);
		
		System.out.println("\n---------------------------------\n");
	}
	
	// Description: method to process menu 2, calculate IPS 
	private static void perhitunganIPS(){
		try {
			System.out.println("\n-------- Perhitungan IPS ---------\n");
			
			double resultIPS = displaySubjectAndIPS();
			System.out.println("\nNilai IPS anda adalah " + String.format("%.2f", resultIPS));
			
			System.out.print("\nTekan enter untuk kembali ke menu...");
			System.in.read();
			
			System.out.println("\n---------------------------------\n");
		}
		catch(Exception e) {
			System.out.println("Error : " + e.getMessage());
		}
	}
	
	// Description: method to process menu 3, update grade of existing subject 
	private static void updateGrade(){
		System.out.println("\n-------- Update Grade ---------\n");
		Subject tempSubject = new Subject();
		
		try {
			do {
				System.out.print("\nMasukkan kode mata kuliah = ");
				String updatedCode = scan.next();
				
				tempSubject = subjectList.stream().filter(x -> updatedCode.equals(x.code)).findFirst().orElse(null);
				if(tempSubject == null) {
					System.out.print("\nKode mata kuliah tidak terdaftar");
					continue;
				}
				
				char newGrade = setStudentSubjectGrade("Masukkan grade baru");
				int subjectIndex = subjectList.indexOf(tempSubject);
	
				tempSubject.setGrade(newGrade);
				subjectList.set(subjectIndex, tempSubject);
				
			} while(tempSubject == null);
			
			displaySubjectAndIPS();
			
			System.out.print("\nTekan enter untuk kembali ke menu...");
			System.in.read();
			
			System.out.println("\n---------------------------------\n");
		} 
		catch(Exception e) {
			System.out.println("Error : " + e.getMessage());
		}
	}
	
	// Description: method to check if user wants to add another subject
	private static boolean checkIsProcessContinue() {
		do {
			System.out.print("Tambah mata kuliah lain? (Y/N) ");
			String choice = scan.next();

			if(choice.equals("Y") || choice.equals("N")) {
				return choice.equals("Y");
			}
		} while(true);
	}
	
	// Description: read input grade from keyboard and validate the value
	private static char setStudentSubjectGrade(String inputMessage) {
		char tempGrade = ' ';
		
		do {
			System.out.print(inputMessage + " = ");
			String grade = scan.next().toUpperCase();
			
			if(GRADE.contains(grade)) {
				return grade.charAt(0);
			}
			else {
				System.out.print("Grade tidak valid (grade hanya terdiri dari A/B/C/D/E)\n");
			}
		} while(tempGrade == ' ');
		
		return tempGrade;
	}
	
	// Description: display all of the subject and calculate IPS
	private static double displaySubjectAndIPS() {
		double sumSKS = 0;
		double sumSKSAndGrade = 0;
		
		for (Subject tempSubject : subjectList) {
			System.out.printf("%-10s %-25s %-5s %s\n", tempSubject.code, tempSubject.name, tempSubject.grade, tempSubject.sks);
			sumSKS = sumSKS + tempSubject.sks;
			sumSKSAndGrade = sumSKSAndGrade + (tempSubject.sks * GRADE.indexOf(Character.toString(tempSubject.grade)));
		}

		return sumSKSAndGrade / sumSKS;
	}
}
