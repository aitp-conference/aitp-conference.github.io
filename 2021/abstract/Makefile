all:
	pdflatex preface.tex
	pdflatex numbers.tex
	pdftk preface.pdf 01.pdf 02.pdf 03.pdf 04.pdf 05.pdf 06.pdf 07.pdf 08.pdf 09.pdf 10.pdf 11.pdf 12.pdf 13.pdf 14.pdf 15.pdf 16.pdf 17.pdf 18.pdf 19.pdf 20.pdf 21.pdf 22.pdf 23.pdf 24.pdf 25.pdf 26.pdf 27.pdf 28.pdf 29.pdf 30.pdf cat output a.pdf
	#pdftk a.pdf burst output aaa_%03d.pdf
	#pdftk numbers.pdf burst output aan_%03d.pdf
	pdftk a.pdf multistamp numbers.pdf output b.pdf

