print("Hello World!!!") #o phyton não precisa de ; ao final das declarações

altura=10 # não é uma linguagem tipada, ou melhor, PHYTON TEM TIPAGEM FRACA, entao nao precisei usar um tipo para esta variavel
print(altura) #tipagem fraca= não tem variaveis com tipos pré-definidos.
#COM A TIPAGEM FRACA= POSSO DEFINIR OBJETOS DE DIFERENTES TIPOS PARA UMA MESMA VARIÁVEL!!!
# o comando = é o comando de atribuição.
nome="Douglas" #não posso usar uma variavel sem estar um objeto associado a ela, ex:
# declarar uma variavel sem inicializa-la, variavel a= ..... -> assim não.
print(nome)
#TIPOS DO PYTHON: int-float-str ou string-Listas,booleanos,tuplas e dicionários.
#int tem precisão arbitraria, pois depende da memória do seu computador
#float tem problemas de precisão pois há uma qunatidade limitada de memória para armazená-lo
#float são escritos com um . para separar a vírgula ex: 1.5 5.75 
#string deve estar entre aspas simples ou aspas duplas
#\n = é usado para pular linha
print(nome + "Hello \n World!!!")
#é possivel especificar mascaras no comando print: pode-se fazer com que float seja impresso com apenas duas casas decimais
#ex: print( "%.2f" % variavel )
#f = para float
#d = para int
#s = para strings
ponto_flutuante = 2.5577
print(ponto_flutuante) #PRINT É UMA FUNÇÃO!!!
print("%.2f" % ponto_flutuante)
print("IMPRIMIRNDO", nome,ponto_flutuante,altura) #Podemos separar o que queremos imprimir com uma vírgula , !!!
# %.Nf = podemos especificar a quantidade de casas a imprimir onde, N especifica o numero de casas decimais
pi = 3.1415
r = 7
area = pi*r*r
print("Área do circulo de raio %.2f" %r + " é: %.2f" %area) #uso % primeiro para especificar, após uso %antes da variavel que quero aplicar essa modificação!!!
#PRINT sempre pula uma linha ao final da impressão, se não quisermos devemos incluir o argumento end="" aon final ex:
print(nome,end="")
print(ponto_flutuante, end="")
print("Olá!!!")
print("Digite um número")
numero = input() #para entrada de teclado, a fubção é input() atribuido a uma variavel. TODOS OS DADOS LIDOS SÃO DO TIPO STRING!!!
print("O número digitado é", numero)
#podemos converter um string digitado para inteiro com a função int()
print("Digite novamente")
numero2 = int(input())
print("o número em tipo inteiro agora é: ", numero2) 
#podemos fazer o mesmo para float()
#PODEMOS FAZER UM COMANDO DE IMPRESSÃO DIRETO NO COMANDO INPUT, EX:
numero3 = float(input("DIGITE UM NÚMERO"))
print(numero3)
#PONTOS IMPORTANTES = QUALQUER DADO NO PHYTON É UM OBJETO!!!
string_vazia = ""
print("Imprimindo string vazia ", string_vazia)