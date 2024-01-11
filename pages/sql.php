SELECT DISTINCT Sehir
FROM (
SELECT Sehir FROM SehirlerA WHERE (Sehir LIKE '%a%' OR Sehir LIKE '%e%') AND Bolge = (SELECT ID FROM Bolgeler WHERE Bolge = 'Marmara Bölgesi')
UNION
SELECT Sehir FROM SehirlerB WHERE (Sehir LIKE '%a%' OR Sehir LIKE '%e%') AND Bolge = (SELECT ID FROM Bolgeler WHERE Bolge = 'Marmara Bölgesi')
) Result;


//SELECT DISTINCT ile tekrarlanan şehir isimleri filtrelenir.
//UNION operatörü ile her iki alt sorgunun birleşimi alınır.
