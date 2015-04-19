/*** Ecrit par TaErG pour OLD Corporation ***/


#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define N 25    // pour le char fichier[] du scanf
#define M 4096 //  taille max en octets d'une balise xml ( pour les tableaux de char )

struct t_balise {   /* la structure permet de stocker le nom d'une balise ainsi que les positions de '<' et '>' */
  char nbalise[M];
  long pbalise;
  long pfermant;
 };
typedef struct t_balise t_balise;

FILE * textexml; // pour le fichier xml
FILE * fhtml;   // pour le fichier html


void parse (){
  int i;
  int cpt;
  char caractere_courant;
  int j=0;
  int diff;
  int difneg;
  int k=0;
  int p=0;// pour boucler sur le scanf
  int taille_fichier=0; //pour la taille du fichier
  
  long pose=0; // pour ftell et fseek dans la derniere partie
   
  int choix=0;//pour le scanf
   
  int ouvrant=0;//pour les '<'
  int fermant=0;//pour les '>'
  
  int nb_balise_ouverture=0;// compter le nombre de <abc>
  int nb_balise_fermeture=0;// compter le nombre de </abc>
  
  long position_ouvrant;//pour ftell
  long position_fermant;//pour ftell
  
  char tabalisecomp[M];
  char fichier[N];
  char nouvelle_balise[M];
                                               /*-------------------------------------------*/
  printf("entrer le nom du fichier xml\n");   /* Pour que l'utilisateur choisisse lui-meme */
  scanf("%s",&fichier);                      /*   le fichier qu'il veut ouvrir            */
  printf("Vous avez choisi %s\n",fichier);  /*-------------------------------------------*/
  
  
  textexml=fopen(fichier,"r+");        /* Si le scanf ne marche pas, remplacer dans fopen le mot fichier par "le nom du fichier que vous voulez ourvir" */
  if(textexml==NULL){
    fprintf(stderr,"Impossible d'ouvrir le fichier\n");
  }
  
  
  
  
  while(fgetc(textexml)!=EOF){ taille_fichier++; }                                              /* pour compter le nombre de caractere du fichier */
  if(taille_fichier==0){ fprintf(stderr,"fichier vide,rien a faire\nFin...\n"); exit(0);}/* si fichier vide quitter avec un message sur 2> */
  
  
  
  rewind(textexml);                                            /* On place le descripteur au début du fichier */
  printf("nombre de caractere du fichier=%d\n",taille_fichier);
  
    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
   /*             Ici débute le premier while, dans cette partie on parcours le fichier a la recherche des caracteres <, </ et >, une fois trouver et compter         */
  /*            on pourra déclarer 1 tableau de structures suffisement grand pour pouvoir y indexer toutes les balises                                               */
 /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 


  while((caractere_courant=fgetc(textexml))!=EOF){
    
    if(caractere_courant=='<'){  position_ouvrant=ftell(textexml); ouvrant=1; /* Sauver la position du curseur au moment où l'on rencontre un debut de balise */
      if(fgetc(textexml)=='/'){  nb_balise_fermeture++; /*printf("\nBalise de fermeture\nouvrante:%ld\n",position_ouvrant);*/} /* Si cette balise est fermante </abc>...*/
      
      else{ nb_balise_ouverture++;}} /* Si cette balise est ouvrante <abc> ...*/
    
    
    if(caractere_courant=='>'){ fermant=1; position_fermant=ftell(textexml);} /* Lorsque l'on rencontre la fin d'une balise */
    
    if(ouvrant==1 && fermant==1){ fseek(textexml,position_ouvrant,SEEK_SET); /* on a trouve un '<' et un '>' on se place sur le '<' et on affiche la chaine qui suit */
      while((caractere_courant=fgetc(textexml))!='>'){ printf("%c",caractere_courant);/*max++;*/}
      fermant=0; ouvrant=0; printf("\n");} /* on remet les flag a 0 et on garde la taille de la chaine la plus grande */
    
    
  }//fin du 1er while

  
  
  printf("\n");
  printf("%d balises d'ouverture\n",nb_balise_ouverture); printf("%d balises de fermeture\n",nb_balise_fermeture); /* On peut maintenant declarer le tableau de structure */
  
  
  
  t_balise tabalise [(nb_balise_ouverture+nb_balise_fermeture)]; /*      Les             */
  t_balise tabalise1[(nb_balise_ouverture+nb_balise_fermeture)];/* tableaux de structure*/
  
  
  
  i=0;
  rewind(textexml); /* retour au debut du fichier */
  
  
  while((caractere_courant=fgetc(textexml))!=EOF){ //2eme while
    
    if(caractere_courant=='<'){  position_ouvrant=ftell(textexml);/* tabalise[i].pbalise=position_ouvrant; tabalise[i].pbalise--;*/ tabalise1[i].pbalise=position_ouvrant;
      if(fgetc(textexml)=='/'){  ouvrant=1; k=i; tabalise1[i].pbalise=position_ouvrant;/* tabalise[i].pbalise=position_ouvrant; tabalise[i].pbalise;*/  i++;  }
      
      else{ ouvrant=1; k=i;/* tabalise[i].pbalise=ftell(textexml)-1;*/ i++; } /*ftell -1 pour se positionner sur la premiere lettre apres le '<' avec fgetc */
      
    }
    
    
    if(caractere_courant=='>'){ fermant=1; position_fermant=ftell(textexml);tabalise1[k].pfermant=position_fermant; tabalise[k].pfermant=position_fermant; }    /* Lorsque l'on rencontre la fin d'une balise */
    
    if(ouvrant==1 && fermant==1){ fseek(textexml,position_ouvrant,SEEK_SET);
      j=1;
      while((caractere_courant=fgetc(textexml))!='>'){ tabalise[k].nbalise[0]='<'; tabalise1[k].nbalise[0]='<'; tabalise[k].nbalise[j]=caractere_courant; tabalise1[k].nbalise[j]=caractere_courant; j++;} /*pour inscrire le nom de la balise dans le tableau de structure*/
      
      tabalise[k].nbalise[j]='>'; tabalise1[k].nbalise[j]='>';j++;
      for(j;j<M;j++){tabalise[k].nbalise[j]='\0';}
      j=0;  fermant=0; ouvrant=0;}                                            /* on comble les trous dans le tableau qui recoit le nom avec des '\0'*/ 
    
    
  }//fin du 2eme while
  
  
  for(i=0;i<(nb_balise_ouverture+nb_balise_fermeture);i++){ /* on stocke les balises d'origines dans tabalise1 pour le cas ou l'on veut modifier les balises (3eme while) */
    for(j=0;j<(strlen(tabalise[i].nbalise));j++){
      tabalise1[i].nbalise[j]=tabalise[i].nbalise[j];}}
  
  printf("\nVoulez-vous modifier une (ou plusieurs) balises ? oui : 1\n");
  printf("Voulez-vous voir le contenu d'une balise  ? oui : 2\n");
  printf("Voulez-vous quitter ? oui : 3\n");
  scanf("%d",&choix);
 
  if(choix==1){
    for(i=0;i<(nb_balise_ouverture+nb_balise_fermeture);i++){printf("\n%d :",i); { printf("%s ",tabalise[i].nbalise);}}
    printf("\n");
    
    
    
    i=0;
    nb_balise_fermeture--;/* pour le scanf car nb_balise_fermeture correspond a l'indice de la balise dans le tableau + 1 */
    choix=0; /* pour le nouveau scanf */
    printf("Entrer le numero precedent la balise de votre choix\n");
  
  /*-------------------------------------------------------------------------------------------------*/
  /*                    Partie La Plus Importante                                                    */ 
  /*                                                                                                 */
  /*          C'est ici que l'on va traiter les modifications apportes aux balises                   */
  /*            le gros du travail se passe dans le else                                             */
  /*-------------------------------------------------------------------------------------------------*/ 
    
    while(p!=1){//3eme while
      
      scanf("%d",&choix);
     
      if(choix>(nb_balise_ouverture)){ printf("Il n'y a pas de balises associees, veuillez recommencer\n");}
      
      
      else{
	p=1;
	printf("Vous avez choisi de modifier : %s\n",tabalise[choix].nbalise);
	printf("Veuillez entrer un nouveau nom pour cette balise\n");
	scanf("%s",&nouvelle_balise);                                   /* l'utilisateur entre un nom pour la balise */
	
	char ancienne_balise[strlen(tabalise[choix].nbalise)];  /*------------------------------------------------------------------------------------------*/
	for(k=0;k<strlen(tabalise[choix].nbalise);k++){        /* Sauvegarder le nom de l'ancienne balise pour pouvoir rechercher la fermante par le nom   */
	  ancienne_balise[k]=tabalise[choix].nbalise[k];      /*------------------------------------------------------------------------------------------*/
	}
	
	
	tabalise[choix].nbalise[0]='<';                       /* la balise changer reçoit la nouvelle chaine précédée de '<' */          
	for(k=1;k<=strlen(nouvelle_balise)+1;k++){          
	  if(k==strlen(nouvelle_balise)+1) tabalise[choix].nbalise[k]='>'; /* et terminer par '>' pour avoir une balise <abc> */
	  else
	    tabalise[choix].nbalise[k]=nouvelle_balise[k-1];
	}
	
	for(cpt=0;cpt<strlen(ancienne_balise);cpt++)        
	  if(ancienne_balise[cpt]=='>')
	    for(cpt;cpt<strlen(ancienne_balise);cpt++)
	      ancienne_balise[cpt]='\0';
	
	
	diff=strlen(nouvelle_balise)-strlen(ancienne_balise);
	if(diff<0){ difneg=diff; diff=(diff*(-1));} else{ diff=diff; difneg=diff;}
	
	
	
	for(i=0;i<diff;k++){tabalise[choix].nbalise[k]='\0'; i++;} 
	
	
	
	k=choix;               // pour parcourir le tableau de balise depuis celle qu'on a changee
	nb_balise_fermeture++;// pour retablir car on en a besoin
	
	
	
	tabalisecomp[0]='<';                          /* on stocke le contenu de l'ancienne balise dans tabalisecomp */
	tabalisecomp[1]='/';
	for(i=2;i<strlen(ancienne_balise)+1;i++){     /* tabalisecomp vaudra toujours '</'suivi des caractere de l'ancienne balise*/
	  tabalisecomp[i]=ancienne_balise[--i];     /* ce qui correspond normalement à la balise de fermeture associée           */
	
	i++;
	}
      tabalisecomp[i++]='>';  /* on place un '>' pour avoir une balise </abc>*/
      
      while(k<(nb_balise_ouverture+nb_balise_fermeture)){ /*on parcourt tout le tableau*/
	
	
	if(strcmp(tabalise1[k].nbalise,tabalisecomp)==0){/* jusqu'a tomber sur la balise qui correspond*/
	  cpt=0;
	  if(strlen(nouvelle_balise)>strlen(ancienne_balise))
	    for(j=2;j<strlen(nouvelle_balise)+2;j++){ tabalise[k].nbalise[0]='<';tabalise[k].nbalise[1]='/'; tabalise[k].nbalise[j]=nouvelle_balise[cpt]; cpt++;} /* </abc */
	  else for(j=2;j<strlen(ancienne_balise)+2;j++){ tabalise[k].nbalise[0]='<';tabalise[k].nbalise[1]='/'; tabalise[k].nbalise[j]=nouvelle_balise[cpt]; cpt++;} /*</abc>*/
	  break;} 
	else  k++;
      }
      
      tabalise[k].nbalise[strlen(tabalise[k].nbalise)]='>'; // on place un '>' a la fin de la chaine pour avoir au finale une balise <abc>
      printf("Nouvelles balises\n");
      for(i=0;i<(nb_balise_ouverture+nb_balise_fermeture);i++)
	printf(" %s \n",tabalise[i].nbalise);
      
      
      }//fin du else

     
    }//fin du 3eme while
  
  
  /*---------------------------------------------------------------------------*/
  /*     On remplace maintenant les anciennes balises par les nouvelles        */
  /*                   dans le fichier                                         */
  /*---------------------------------------------------------------------------*/  
  
  
  char fichiertmp[(taille_fichier+1)];
  char tempo[2*(taille_fichier)];
 
  
  rewind(textexml);
  for(j=0;(caractere_courant=fgetc(textexml))!=EOF;j++){
    tempo[j]=caractere_courant; 
  }
  rewind(textexml);
  
  k=(nb_balise_ouverture+nb_balise_fermeture);
  for(i=0;i<k;i++){
    fseek(textexml,pose,SEEK_SET);
    
    cpt=i;
    cpt++;
    
    
    fprintf(textexml,"%s",tabalise[i].nbalise);
    j=(tabalise1[i].pfermant++); 
    
    
    
    if(i<((nb_balise_ouverture+nb_balise_fermeture)-1)){
      for(j;j<(tabalise1[cpt].pbalise);j++){
	fprintf(textexml,"%c",tempo[j]); pose=ftell(textexml);
	
      }
      
      pose--;
    }
    
  }
  fclose(textexml);
  printf("Merci d'avoir utilise Xml Parsor 2009 edite par OLD Corporation\n");
  }//fin du if(choix==1) (modification des balises)
  

   /**************                          Cas ou l'on veut voir le contenu d'une balise                      ************************/
  /*      On affiche en realite ce qui se trouve entre une balise d'ouverture choisit et sa balise fermante (celle-ci incluse)       */
 /*                        il faut qu'un fichier nommer tmp.htm soit créer avant le lancement du programme                          */
/*---------------------------------------------------------------------------------------------------------------------------------*/
  
   else if(choix==2){
    char temp[taille_fichier];
    rewind(textexml);
    char fichiertmp[(taille_fichier+1)];

    fhtml=fopen("tmp.htm","r+");
    if(fhtml==NULL) fprintf(stderr,"Impossible d'ouvir le fichier hmtl\n");
    while(fgetc(fhtml)!=EOF) fprintf(fhtml,"");
    rewind(fhtml);
    fprintf(fhtml,"<html><head></head><body>");

     
    for(j=0;(caractere_courant=fgetc(textexml))!=EOF;j++){
    fichiertmp[j]=caractere_courant; 
  }
    choix=0;
    printf("\n Quelle balise vous interesse (entrez le numero qui la precede) ? \n");
    for(i=0;i<(nb_balise_ouverture+nb_balise_fermeture);i++)
      printf("%d : %s\n",i,tabalise1[i].nbalise);
    scanf("%d",&choix);
    printf("Vous avez choisi %s\n",tabalise1[choix].nbalise);
    fprintf(fhtml,"<h1>Contenu de la balise demand&eacute;e </h1>",tabalise1[choix].nbalise);
    tabalisecomp[0]='<';
    tabalisecomp[1]='/';
    for(i=2;i<=strlen(tabalise1[choix].nbalise);i++){
      tabalisecomp[i]=tabalise1[choix].nbalise[--i]; i++; }
    printf("balise de comparaison : %s\n",tabalisecomp);
    i=tabalise1[choix].pfermant;
    printf("i = %d\n",i);
    fprintf(fhtml,"<li>");
     while(i){
      if(strstr(temp,tabalisecomp)!=NULL) break;
      else{ temp[i-(tabalise1[choix].pfermant)]=fichiertmp[i]; fprintf(fhtml,"%c",fichiertmp[i]); i++; }
      
      }
     fprintf(fhtml,"</li>");
     fseek(fhtml,0,SEEK_END);
     fprintf(fhtml,"</body></html>");
     fclose(fhtml);

     
     printf("\n");
     printf("Merci d'avoir utilise Xml Parsor 2009 edite par OLD Corporation\n");
  }//fin de choix==2

  
    else { printf("Merci d'avoir utilise Xml Parsor 2009 edite par OLD Corporation\n");exit(0); }
}//fin de la fonction


int main (){
  parse();
  return 0;
}


/*******************           TaErG ::  OLD Corporation         ****************************/
