<input type="hidden" name="plan_name" value="{{$plan_info['name']}}">

<div class="mb-3">
    <label for="duration">Duration :</label>
    <input type="number" name="duration" id="duration" class="form-control" required value="{{$plan_info['duration']}}"
        readonly>

</div>
<div class="mb-3">
    <label for="fees">Plan Fees In Rs :</label>
    <input type="number" name="plan_fees" id="fees" class="form-control" readonly value="{{$plan_info['fees']}}">
</div>
<div class="mb-3">
    <label for="plan_discount">Plan Discount In %:</label>
    <input type="plan_discount" name="plan_discount" id="plan_discount" class="form-control" readonly
        value="{{$plan_info['discount']}}">
</div>
<div class="mb-3">
    <label>After Discount Plan Fees In Rs :</label>
    <input type="number" id="afterdiscountprice" class="form-control" readonly
        value="{{$plan_info['fees']-($plan_info['fees']*$plan_info['discount']/100)}}">
</div>

<div class="mb-3">
    <label for="extradiscount">Extra Discount In %:</label>
    <input type="text" name="extradiscount" id="extradiscount" class="form-control" max="100" min="0"
        placeholder="Enter Your Extra Discount"  onchange="changeFees('edd')" onkeyup="changeFees('edd')"
        value="{{$plan_info['extradiscount']}}" title="Enter Valid Extra Discount">
        @error('extradiscount')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="mb-3">
    <label for="feessubmited">Final Fees To Be Submitted In Rs :</label>
    <input type="text" name="feessubmited" id="feessubmited" class="form-control" min="0" max="{{$plan_info['fees']-($plan_info['fees']*$plan_info['discount']/100)}}" 
        value="{{$plan_info['fees']-($plan_info['fees']*$plan_info['discount']/100)}}" title="Enter Valid Fees Submitted"  onkeyup="changeFees('fss')" onchange="changeFees('fss')" placeholder="Enter Your Final Fees" >

@error('feessubmited')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="mb-3">
    <label for="dos">Date Of Fees Submit :</label>
    <input type="date" name="dos" id="dos" value="{{date('Y-m-d',time())}}" class="form-control" 
    onchange="planexp()" placeholder="Enter Your Date Of Submit" max="{{date('Y-m-d',time())}}">
</div>
<div class="mb-3">
    <label for="dos">Plan Expire Date :</label>
    <input type="date" name="planexpiredate" id="planexpiredate" class="form-control"
        placeholder="Enter Your Date Of Birth" readonly> 
</div>
                    <div class="mb-3">
                        <label for="paymentmode">Payment Mode :</label>
                        <select name="paymentmode" id="paymentmode" class="form-select text-white bg-transparent"
                            style="border:1px solid #555 !important">
                            <option class="text-black">Cash</option>
                            <option class="text-black">Online</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="remark">Remark:</label>
                        <textarea name="remark" id="remark" class="form-control" placeholder="Enter Your Address"
                            rows="4">{{old('remark')}}</textarea>
                            Hint: <span class="text-muted">In payment is online write UPI id and transaction id and app name(Like: phone pay, paytm) or any. you can also some note here </span>
                    </div>
<script>
    $(document).ready(function () {
        planexp();
        mainbtn.disabled = false;
    })
    function planexp() {
        const dateString = dos.value;
        const date = new Date(Date.parse(dateString));
        const nextdate = new Date(date.setMonth(date.getMonth() + parseInt(duration.value))).toISOString().split('T')[0];
        planexpiredate.value = nextdate;
        
    }
    function changeFees(ts){
        let adp = afterdiscountprice;
        let fs = feessubmited;
        let ed = extradiscount;
        if(ts == 'edd'){
            if(ed.value >= 0 && ed.value <= 100)
            fs.value = adp.value-(adp.value*ed.value/100);
        else{
            ed.value = 0;
            alert("OOPS! Invalid Discount");
        }
        }else{
            if(adp.value != fs.value){
                if(Number(fs.value) >= 0 &&  Number(fs.value) <= Number(adp.value)){
                    ed.value = (adp.value - fs.value)/adp.value*100;
                }else{

                 
                    if(Number(adp.value)<Number(fs.value)){
                    alert("You can't take extra fees from the plan fees");

                }else{
            alert("OOPS! Invalid Amount");

                }
                fs.value = adp.value;
                    ed.value = 0;
            }

        }
    }
}
    

</script>