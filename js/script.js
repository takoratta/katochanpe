function showInputPathDetail(){
	$(".modal_path").show();
}
function hideInputPathDetail(){
	$(".modal_path").hide();
}




//[syncer-form]に[onchange]イベントを設定する
document.getElementById( "syncer-form" ).onchange = function(){
//ファイルリストを取得
var fileList = this.files;

//ファイルがなければ終了
if( 1 > fileList.length ){
	return false;
}

	//全てのファイルに処理
	for( var i=0,l=fileList.length; l>i; i++){

		//対象のファイルを取得
		var file = fileList[i];

		//[FileReader]クラスを起動
		var fr = new FileReader();

		//読み込み後の処理
		fr.onload = function(){
			// document.getElementById( "syncer-result" ).innerHTML += '<div class="row">';

			//HTMLに書き出し
			//[innerHTML]は[+=]にしないとどんどん上書きされてしまうので注意

			//画像エリア
			// document.getElementById( "syncer-result" ).innerHTML += '<img src="' + this.result + '" class="lcal-img-multiple">';
			document.getElementById( "syncer-result" ).innerHTML += '<div class="row">' + '<img src="' + this.result + '">' + '<input type="text" name="imagetext[]">' + '</div>';
			// document.getElementById( "syncer-result" ).innerHTML += '<img src="' + this.result + '" class="lcal-img-multiple">';
			// document.getElementById( "syncer-result" ).innerHTML += '<div class="' + 'col-xs-3 col-sm-3 col-md-3 col-lg-3' + '"' + 'style="' + 'background-image:url(' + 'img/dummy_pic.png' + "')>" + '</div>';

			//入力欄エリア
			// document.getElementById( "syncer-result" ).innerHTML += '<input type="' + 'text' + '"style="width: 70%; height: 30%;">';

			// document.getElementById( "syncer-result" ).innerHTML += '</div>';
		}

		//ファイルを[base64エンコード]として読み込む
		fr.readAsDataURL( file );
	}

}