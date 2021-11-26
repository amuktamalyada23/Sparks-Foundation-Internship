<?php
include('header.php');
?>
<div class="banner">
    <div class="info">
    </div>
</div><br>
<!--<center>
    <button><a href="customer.php">View Customers</a></button>
    <button><a href="history.php">History</a></button>
    <button ><a href="transfer.php">Transfer Money</a></button>
    <button ><a href="create.php">Create User</a></button>
</center>-->
</center>
   <br>
   <br><br>
   <h3 class="quote"><q>
   Do not save what is left after spending, but spend what is left after saving.</q></h3>
    <br>
    <center>
        <div>
<div class="transfer" style="float:left;box-shadow:-3px -3px 3px #82E0AA;">
    <h1>Transfer Money</h1>
    <h5>Our bank has started online payments and money transfers!!!We started online money transfers to ease the use of our 
        customers.Now, Any of our customers can easily transfer money at any time and from any where.You can transfer the 
        money by clicking the below button.
       </h5><br>
    <button><a href="transfer.php">Transfer Money</a></button>
        </div>

        <div class="transfer" style="float:left;">
            <h1>View Customers</h1>
            <h5>Every person can be a customer in our bank by opening an account.You can open any kind
                of account like savings banck account or cuurent bank account. We even give loans to our 
                customers based on some criteria.
                You can click on the below button to see our customers
            </h5><br>
            <button><a href="customer.php">View Customers</a></button>
        </div>

        <div class="transfer" style="box-shadow:3px 3px 3px #82E0AA;float:left;">
             <h1 >View History</h1>
             <h5>
                 If you want to see the history of our customer's transactions, then you can click the below
                 the button.There are many transactions, but here only few of them are displayed.
             </h5><br><br><br>
             <button><a href="history.php">View History</a></button>
        </div>
</div><br><br>
</center>
<div>
<div class="about" id="abt" style="float:left;">
        <h1>About Sparks Bank</h1><br>
        <h5>Sparks bank was founded in 1963. Sparks bank is the largest banking and financial services
             company in India. The bank provides banking services to the customer. ... Online banking allows
              a user to conduct financial transactions via the Internet. Online banking is also known as
               Internet banking or web banking.Online banking allows a user to conduct financial transactions
                via the Internet.
Consumers aren't required to visit a bank branch in order to complete most of their basic banking transactions.
</h5>
    <br><br><br><br>
    </div>

    <div class="imgs" id="contact" style="float:left">
       <h1>Contact Us</h1>
       <h5>If you have any queries, You can contact us by filling the form below. </h5>
       <form action="contact.php" method="post">
           <input type="text" name="name" id="name" placeholder="Name" required><br><br>
          <input type="email"name="email" id="email" placeholder="E-mail" required><br><br>
           <textarea name="comments" id="comments" cols="30" rows="3" placeholder="Message" required></textarea><br>
           <input type="Submit" value="Submit" style="background-color:#82E0AA;color:black;border:1px solid black">
       </form>
    </div>

</div>
<div class="loader">
    <img src="load1.gif" alt="">
</div>
<?php include('footer.php'); ?>