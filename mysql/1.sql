
SELECT b.id, b.name, COUNT(p.author_id) AS count_authors
FROM books AS b
JOIN author_book AS p 
ON (b.id = p.book_id)
GROUP BY b.id


