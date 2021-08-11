@push('title_base')
    All Email
@endpush

<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        section {
            padding: 20px 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }
        table {
            border-collapse: collapse;
        }
        td {
            font-size: 12px;
        }
        @media (max-width: 770px) {
            table {
                width: 100%;
                font-size: .9em;
            }
            table tr {
                display: flex;
                flex-direction: column;
                border: 1px solid #fff;
                padding: 16px;
                margin-bottom: 16px;
            }
            table thead {
                display: none;
            }
            table tr[data-title]{
                display: flex;
            }
            table td[data-title]::before {
                content: attr(data-title);
                width: 80px;
                font-weight: bold;
                color: rgb(96, 95, 95);
            }
        }
    </style>

    <section>
        <h3>Email</h3>
        
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>FullName</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Feha</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($emails as $email)
                    <tr>
                        <td data-title="Id: ">{{$email->id}}</td>
                        <td data-title="Name: ">{{$email->name}}</td>
                        <td data-title="Company: ">{{$email->company}}</td>
                        <td data-title="Email: ">{{$email->email}}</td>
                        <td data-title="Phone: ">{{$email->phone}}</td>
                        <td data-title="Fecha: ">{{$email->created_at}}</td>
                        <td data-title="Message: ">{{$email->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
        
    </section>
</div>
