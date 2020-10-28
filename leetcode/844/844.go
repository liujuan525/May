package main


//import "fmt"

func main()  {
	var s string
	var t string
	s = 'ab#c'
	t = 'ad#c'
	backspaceCompare(s, t)
}

func backspaceCompare(S string, T string) bool {
	s1 := handleString(S)
	t1 := handleString(T)
	return s1 == t1
}

func handleString(str string) string {
	//var lenString int
	//for i = 0; i < len(str) ; i++ {
	//
	//}
	return str
}

