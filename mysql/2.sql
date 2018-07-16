
SELECT b.name
FROM books AS b
JOIN author_book AS p 
ON b.id = p.book_id
GROUP BY b.id
HAVING COUNT(p.author_id) > 2