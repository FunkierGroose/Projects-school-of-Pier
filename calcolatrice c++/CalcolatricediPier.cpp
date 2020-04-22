#include <iostream>
#include <windows.h>
#include <stdlib.h>
#include <math.h>

using namespace std;

int main()
{
    int scelta, numero1, numero2, resto;       // Variabili Calcolatrice
    float risultato;                           // Varibile Risultato Calcolatrice
    
    float numero_pot, esponente, potenza = 1;  // Variabili Potenza
    int for_potenza;                           // Varibili Potenza Del Ciclo For
    
    float radice, risultato_radice;            //Variabili Radice
    
    char operazione;                           // Variabile Per Lo Switch
    
    do { // Inizio Ciclo D-WHILE
    
        system("cls"); // Pulisci La Schermata
        
		cout << "                                   Benvenuto" << endl;
		cout << "                        Questa e' la calcolatrice di Pier" << endl;
    
    cout << endl << " :: 1 Calcolatrice";
    cout << endl << " :: 2 Potenza";
    cout << endl << " :: 3 Radice Quadrata";
    cout << endl << " :: 4 Esci" << endl;
    cout << endl << " :: > "; cin >> scelta;
    
    if(scelta==1) { 
        
            cout << endl << " :: Num1    Operazione    Num2" << endl;
            
            cout << " :: > "; cin >> numero1 >> operazione >> numero2;
            
        switch(operazione) {  // Swicth Per Vedere Quale Operazione Deve Svolgere
            case '+':
            	
                risultato = numero1+numero2;
                 cout << "\n" << " :: Risultato: " << risultato << "\n\n" << " :: Premi un tasto qualsiasi per tornare al menu''";
                system("pause>nul");
                
            break;
            
            case '-':
            	
                risultato = numero1-numero2;
                 cout << "\n" << " :: Risultato: " << risultato << "\n\n" << " :: Premi un tasto qualsiasi per tornare al menu''";
                system("pause>nul");
                
            break;
            
            case '*':
            	
                risultato = numero1*numero2;
                 cout << "\n" << " :: Risultato: " << risultato << "\n\n" << " :: Premi un tasto qualsiasi per tornare al menu''";
                system("pause>nul");
                
            break;
            
            case '/':
            	
                risultato = numero1/numero2;
                resto = numero1%numero2;
                 cout << "\n" << " :: Risultato: " << risultato << "\n" << " :: Resto: " << resto << "\n\n" << " :: Premi un tasto qualsiasi per tornare al menu''";
                system("pause>nul");
                
            break;
        }    
}
      if(scelta==2) { 
	   // Blocco Esponente
            cout << endl << " :: Numero: "; cin >> numero_pot; 
             cout << " :: Potenza: "; cin >> esponente;
             
              for(for_potenza=0;for_potenza<esponente;for_potenza++)
              {
              	potenza=potenza*numero_pot;
			  }
               
              cout << endl << " :: Risultato: " << potenza << endl;
             cout << endl << " :: Premi un tasto qualsiasi per tornare al menu''";
            system("pause>nul");
            
        } 
      if(scelta==3) {  // Blocco Radice
      
          cout << endl << " :: Numero: "; cin >> radice;
           risultato_radice=sqrt(radice);
           
             cout << endl << " :: Risultato: " << risultato_radice << endl;
            cout << endl << " :: Premi un tasto qualsiasi per tornare al menu''";
            
           system("pause>nul");
       }    
       
    } while(scelta!=4);
    
    
    system("pause");
    return 0;
}        
