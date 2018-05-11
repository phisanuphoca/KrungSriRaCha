<a href="{{ route('admin.index') }}"><< ย้อนกลับ</a><br>

<table border="1" style="width: 950px;display:inline-block">
    <tbody>
      <tr>
     
        <td width="50"> <center>UserID </td>
        <td width="100"> <center>Username </td>
        <td width="100"> <center>Password </td>
        <td width="170"> <center>Name </td>
        <td width="150"><center> email </td>
        <td width="60"><center> Point </td>
        <td width="70"> <center>Status </td>
        
        
      </tr>

    
   


       <tr>
       <form action="{{ route('admin.update',$admin->UserID) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
        <td style="max-height:15px; background:#DDDDDD; line-height:10px;"  ><center> {{ $admin->UserID }}</td>
        <td style="max-height:15px; background:#DDDDDD; line-height:10px;"  ><center> {{ $admin->Username }}</td>
        <td style="max-height:15px; line-height:10px;" align=righ > <input type="text" name="Password" value="{{ $admin->Password }}"></td>
        <td style="max-height:15px; line-height:10px;"  align=righ> <input type="text" name="Name" value="{{ $admin->Name }}"></td>
        <td style="max-height:15px; line-height:10px;"  align=righ> <input type="text" name="email" value="{{ $admin->email }}"></td>
        <td style="max-height:15px; line-height:10px;" align=right > <input type="number" name="Point" style="width: 54px;" value="{{ $admin->Point }}"></td>
        <td > 
            <select type="text" name="Status">
            <?php
            if ($admin->Status =='USER') {
              echo '<option value="USER" selected>USER</option>
              <option value="BAN" >BAN</option>
              <option value="ADMIN">ADMIN</option>';
            }elseif ($admin->Status =='ADMIN') {
              if ($admin->Username=='admin') {
                    echo '<option value="ADMIN"  selected>ADMIN</option>';
              }else
              {
                echo '<option value="USER" >USER</option>
              <option value="BAN" >BAN</option>
              <option value="ADMIN" selected>ADMIN</option>';
              }
              
            }else{
              echo '<option value="USER" >USER</option>
              <option value="BAN" selected >BAN</option>
              <option value="ADMIN" >ADMIN</option>';
            }
            
            ?>
            </select>
        </td>
        <td width="70">&nbsp;<button type="submit">บันทึก</button></td>
        


        </center>


      </tr>
      
    </tbody>
  </table>