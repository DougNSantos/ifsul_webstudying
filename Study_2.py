meu_vetor = [1,2,3,4,5] #aprendendo sobre vetores em python
print(meu_vetor[3])
vetor_strings = ["Art","Doug","Yo"] #lembrando que python é CaseSensitive
print(vetor_strings[2]) #Posso usar isso para o projeto de EPI para aprender e se der vincular um EPI a uma descrição
for elemento in meu_vetor:
    print(elemento)
for nomes in vetor_strings: #lembrando que indice começa em 0
    print(nomes)  
for i in range(len(vetor_strings)): #também da pra usar o método range() + método len() : len=length = tamanho
    print(vetor_strings[i])    # lembrando de adicionar os : no final do loop para executá-lo corretamente
  # é apenas declarar o nome da variavel do tipo vetor e adicionar os valores, ou deixar vazia ...