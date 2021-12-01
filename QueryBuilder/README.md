Usage
1. Initialization class with connetction to database
$var = new QueryBuilder(object[Connect to database]);

2. Get all notes from your table
$var -> getAll(string 'your_table');

3. Get one note from your table used with id of note
$var -> getOne(string 'table', string 'id');

4. Create new note in your table 
$var -> create(string 'your_table', array ["title" => $_POST['title']]);

5. Updete your note in table used new data and id of note
$var -> update(string 'table', string 'data', string 'id');

6. Delete note used id of this note
$var -> delete(string 'table', string 'id');
