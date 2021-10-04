<template>
    <div class="Home">
        <Header/>
        <main class="container">
            <h1 class="title">List View User</h1>
            <table class="table table-striped table-dark fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr class="show-info">
                            <th scope="row">1</th>
                            <td>
                               <p>adminnnnnnnnnnnnnnnnnnnnnnnn</p>
                            </td>
                            <td>
                                 <p>Adminnnnnnnnnnnnnnnnnnnnn</p>
                            </td>
                            <td>
                                 <p>admin@admin.commmmmmmmmmmmmmmmmmmm</p>
                            </td>
                            <td>
                                  <p>12345</p>
                            </td>
                            <td class="action">
                                <a href="#" class="edit">
                                   <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#" class="delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </main>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header';
import Footer from './Footer';
export default {
    name : 'Home.vue',
    components : {
        Header,
        Footer
    },
    data() {
        return{
            posts: [],
        }
    }



}
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    .title{
        margin: 30px 0;
        text-align: center;
        font-weight: 500;
        text-transform: uppercase;
        color: #2b5e90;
        font-family: 'Poppins', sans-serif;
    }

    .show-info p{
        overflow: auto;
        margin-bottom: 0;
        padding-bottom: 10px;
        /* cursor: pointer; */
    }

    .show-info p::-webkit-scrollbar{
        width: 10px;
        height: 8px;
        cursor: pointer;
    }

    .show-info p::-webkit-scrollbar-track {
        background: #2f373d;
        border-radius: 10px;
    }

    .show-info p::-webkit-scrollbar-thumb{
        background: #444b50;
        box-shadow: 0 0 7px #333;
        padding: 5px 0;
        border-radius: 10px;
    }

    .show-info p::-webkit-scrollbar-thumb:hover{
        background: #374a5c;
    }

    table{
        box-shadow: 3px 3px 10px rgb(0 0 0);
    }

    .table.fixed {
        table-layout: fixed;
    }
    .action{
        position: relative;
    }
    a.edit{
        position: absolute;
        top: 3px;
        padding: 15px;
        left: 20px;
        color: cyan;
    }
    a.delete{
        position: absolute;
         top: 3px;
        padding: 15px 18px;
        right: 60px;
        color: rgb(255, 21, 21);
    }
    a:hover{
        background: #505050;
        border-radius: 10px;
    }

    a.delete:hover::before{
        position: absolute;
        top: -5px;
        font-size: 10px;
        left: 30px;
        font-weight: 500;
        color: #c2c2c2;
        letter-spacing: 1px;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 3px 3px 7px rgba(0,0,0,0.3);
        content: 'Delete';
    }

    a.edit:hover::before{
        position: absolute;
        letter-spacing: 1px;
        top: -5px;
        font-size: 10px;
        left: 30px;
        font-weight: 500;
        color: #c2c2c2;
        padding: 10px 15px;
        border-radius: 5px;
        box-shadow: 3px 3px 7px rgba(0,0,0,0.3);
        content: 'Edit';
    }

    a i{
        font-size: 17px;
    }
</style>
