La fonction Foo prend en parametre des intervales sous la forme d'un tableau de tableaux a 2 valeurs ex: [[x,y], [a,b]]   
Si ces intervales comprennent les même valeurs, ils sont fusionnés la fonction retourne un tableau de tableaux des nouveaux intervales
exemples 

| Appel                                                                                                                                                  |  Sortie     |
|--------------------------------------------------------------------------------------------------------------------------------------------------------|:-:    |
| Si aucun intervale ne se chevauche, foo retourne les parametres tel quel <br/>`foo([[0, 3], [6, 10]])`                                                 | `[[0, 3], [6, 10]]` |
| Si les intervales se chevauchent, foo retourne un tableau avec la valeurs minimales et maximales des intervales concerné<br/> `foo([[0, 5], [3, 10]])` | `[[0, 10]]` |
| Si un intervalle englobe un autre, foo retourne un tableau avec la valeurs du plus gran intervalle<br/>`foo([[0, 5], [2, 4]])`                         | `[[0, 5]]` |