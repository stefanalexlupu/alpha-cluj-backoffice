<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TryAlpha</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
  <div class="container">
    <section class="section">
      <h1 class="title">Contacte</h1>
      <div class="table-container">
        <table class="table is-hoverable">
          <thead>
            <tr>
              <th>Nume</th>
              <th>Vârstă</th>
              <th>Info</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
              <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->age }}</td>
                <td>{{ $contact->info }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </div>
</body>

</html>
