function altRows(id)
{
	if(document.getElementsByTagName)
	{
		var table = document.getElementById(id);
		var rows = table.getElementsByTagName("tr");

		for(i = 0; i < rows.length; i++)
		{
			if(i % 2 == 0)
			{
				rows[i].className = "evenrowcolor";
			}
			else
			{
				rows[i].className = "oddrowcolor";
			}
		}
	}
}

window.onload = function()
{
	altRows('alternatecolor');
}

function delete_id(id)
{
	if(confirm('RECORD WILL BE PERMANENTLY DELETED. DO WANT TO PROCEED?'))
	{
		window.location.href='contacts.php?delete_id='+id;
	}
}