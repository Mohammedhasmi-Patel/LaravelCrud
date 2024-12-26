<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <span class="add">
        <a href="/add">Add</a>
    </span>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Action</td>

        </tr>

        <tbody>
            <tr>
            @if(isset($data) && $data->isNotEmpty())
                @foreach ($data as $student)
                    <tr>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                        <form action="{{ route('student.delete', $student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: red; border: none; background: none; cursor: pointer;">Delete</button>
                            </form>


                            <form action="{{ route('student.edit', $student->id) }}" method="GET" style="display: inline;">
                                @csrf
                                @method('GET')
                                <button type="submit" style="color: blue; border: none; background: none; cursor: pointer;">
                                <a href="{{ route('student.edit', $student->id) }}" style="color: blue; text-decoration: none;">Update</a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" style="text-align:center;">No Students Found</td>
                </tr>
            @endif

            </tr>
        </tbody>
        
    </table>
</body>
</html>

<style>

    

    
    .add{
        width: 120px;
        background-color: green;
        color: #f1f1f1;
        padding: 30px;
        border-radius: 5px;
    }
    table{
        margin-top: 50px;

    }


</style>