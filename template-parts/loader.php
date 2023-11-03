<div id="loader" class="loader">
	<span class="loader__animation"><span class="loader__inner"></span></span>
</div>

<style>
	.loader {
		position: fixed;
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: rgba(0, 0, 0, 0.650);
		height: 100%;
		width: 100%;
		top: 0;
		left: 0;
		opacity: 0;
		transition: all 0.5s ease-in;
		z-index: -10;
	}

	.loader.loader--active {
		z-index: 9000 !important;
		opacity: 1;
		transition: all 0.5s ease-in;
	}

	.loader__animation {
		display: inline-block;
		width: 30px;
		height: 30px;
		position: relative;
		border: 4px solid #Fff;

		animation: loader 2s infinite ease;
	}

	.loader__inner {
		vertical-align: top;
		display: inline-block;
		width: 100%;
		background-color: #fff;
		animation: loader-inner 2s infinite ease-in;
	}

	@keyframes loader {
		0% {
			transform: rotate(0deg);
		}

		25% {
			transform: rotate(180deg);
		}

		50% {
			transform: rotate(180deg);
		}

		75% {
			transform: rotate(360deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	@keyframes loader-inner {
		0% {
			height: 0%;
		}

		25% {
			height: 0%;
		}

		50% {
			height: 100%;
		}

		75% {
			height: 100%;
		}

		100% {
			height: 0%;
		}
	}
</style>
