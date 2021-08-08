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
                        <th>Copaning</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Feha</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Id: ">1</td>
                        <td data-title="Name: ">Pedro carrero</td>
                        <td data-title="Companig: ">La costeña</td>
                        <td data-title="Email: ">lacosteña@lacosteña.com</td>
                        <td data-title="Phone: ">5514589865</td>
                        <td data-title="Fecha: ">20/09/2021</td>
                        <td data-title="Message: ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis eveniet veniam iure maxime aliquid, quia omnis in quas delectus! Sint quo maxime ipsa accusamus natus, </td>
                    </tr>
                    <tr>
                        <td data-title="Id: ">2</td>
                        <td data-title="Name: ">Pedro carrero</td>
                        <td data-title="Companig: ">La costeña</td>
                        <td data-title="Email: ">lacosteña@lacosteña.com</td>
                        <td data-title="Phone: ">5514589865</td>
                        <td data-title="Fecha: ">20/09/2021</td>
                        <td data-title="Message: ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis eveniet veniam iure maxime aliquid, quia omnis in quas delectus! Sint quo maxime ipsa accusamus natus, </td>
                    </tr>
                    <tr>
                        <td data-title="Id: ">3</td>
                        <td data-title="Name: ">Pedro carrero</td>
                        <td data-title="Companig: ">La costeña</td>
                        <td data-title="Email: ">lacosteña@lacosteña.com</td>
                        <td data-title="Phone: ">5514589865</td>
                        <td data-title="Fecha: ">20/09/2021</td>
                        <td data-title="Message: ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis eveniet veniam iure maxime aliquid, quia omnis in quas delectus! Sint quo maxime ipsa accusamus natus, </td>
                    </tr>
                    <tr>
                        <td data-title="Id: ">4</td>
                        <td data-title="Name: ">Pedro carrero</td>
                        <td data-title="Companig: ">La costeña</td>
                        <td data-title="Email: ">lacosteña@lacosteña.com</td>
                        <td data-title="Phone: ">5514589865</td>
                        <td data-title="Fecha: ">20/09/2021</td>
                        <td data-title="Message: ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis eveniet veniam iure maxime aliquid, quia omnis in quas delectus! Sint quo maxime ipsa accusamus natus, </td>
                    </tr>
                    <tr>
                        <td data-title="Id: ">5</td>
                        <td data-title="Name: ">Pedro carrero</td>
                        <td data-title="Companig: ">La costeña</td>
                        <td data-title="Email: ">lacosteña@lacosteña.com</td>
                        <td data-title="Phone: ">5514589865</td>
                        <td data-title="Fecha: ">20/09/2021</td>
                        <td data-title="Message: ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis eveniet veniam iure maxime aliquid, quia omnis in quas delectus! Sint quo maxime ipsa accusamus natus, </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        
    </section>
</div>
