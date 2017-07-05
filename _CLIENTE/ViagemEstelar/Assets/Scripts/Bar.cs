using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Bar : MonoBehaviour {

	private float fillAmount;
	[SerializeField]
	private Text texto;
	[SerializeField]
	private Image conteudo;

	[SerializeField]
	private float lerpVelocidade;

	[SerializeField]
	private Color corAlta;

	[SerializeField]
	private Color corBaixa;

	[SerializeField]
	private bool lerpCor;
	public float MaximoValor { get; set; }

	public float ValorAtual
	{

		set
		{
			string[] temp = texto.text.Split(':');
			texto.text = temp[0] + ":" + value;
			fillAmount = BarValor(value, MaximoValor);
		}
	}

	// Use this for initialization
	void Start()
	{

		if (lerpCor)
		{
			conteudo.color = corAlta;
		}
	}

	// Update is called once per frame
	void Update()
	{

		EfeitoBar();

	}

	private void EfeitoBar()
	{
		if (fillAmount != conteudo.fillAmount)
		{
			conteudo.fillAmount = Mathf.Lerp(conteudo.fillAmount, fillAmount, Time.deltaTime * lerpVelocidade);
		}
		if (lerpCor)
		{
			conteudo.color = Color.Lerp(corBaixa, corAlta, fillAmount);
		}
	}

	private float BarValor(float valorAtual, float maximoValor)
	{
		return (valorAtual / maximoValor);
		// 80/100 = 0,8 
	}
}
