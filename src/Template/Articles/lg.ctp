<?= $this->Html->css('articles.css') ?>
	<div class="container">
		<div class="content_header">
			<a href="/articles">
				<div class="header_title">ToDo Function</div>
			</a>
		</div>
		<div class="main_content">
			<form action="/submit" method="post">
				<div class="action_content">
					<div class="input_content">
            <input type="text" size='38' id='input' placeholder='ToDoを入力' name="name" />
            <button class="submit_btn">送信</button>
          </div>
        </form>
        <div class="output_content">
					<div class="tool">
						<div class="content_title">Result</div>
					</div>
					<hr/>
					<article class="article">
						<form action="/articles/del" method="get">
							<input type="text" class="hidden" name="id" value="<?php foreach($result as $row) print $row->id ?>" />
							<button class="result"><?php foreach($result as $row) print $row->name ?> </button>
						</form>
						<form action="/articles/state" method="get">
							<input type="text" class="hidden" name="id" value="<?php foreach($result as $row) print $row->id ?>" />
							<button class="result">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</button>
						</form>
					</article>
				</div>
			</div>
		</div>
